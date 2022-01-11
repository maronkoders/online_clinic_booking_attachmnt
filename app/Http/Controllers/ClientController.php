<?php

namespace App\Http\Controllers;

use App\Models\ClientAccount;
use App\Models\ClientBank;
use App\Models\ClientHistory;
use App\Models\ClientMedicalDetail;
use App\Models\Clinic;
use App\Models\ClinicPatient;
use App\Models\Practitioner;
use App\Models\PractitionerSlot;
use App\Models\prescription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    //protected $clientRecord;
    public function __construct()
    {
        // if(auth()->user()->user_type_id == 2)
        // {
        //     $this->clientRecord =  ClinicPatient::where('user_id', auth()->user()->id)->first();
        // }
    }

        const days =  ['Monday' ,'Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    public function searchView()
    {
        $allPractitioners = Practitioner::all();
        return view('client.search')->with(['practitioners' => $allPractitioners]);
    }


    public function savePrescriptions(Request $request){
        $validator = Validator::make($request->all(),[
            'description' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{
             $request['practitioner_id'] = auth()->user()->id;
             prescription::create($request->except(['_token']));
             return redirect()->back()->with('status','Prescription  record was added');
         }
    }

    public function saveMedicalData(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'heartRate' => 'required|numeric',
            'bodyTemperature' => 'required|numeric',
            'glucoseLevel' => 'required|numeric',
            'bloodPressure' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{
             ClientMedicalDetail::create($request->except(['_token']));
             return redirect()->back()->with('status','Medical record was updated');
         }
    }

    public function patientInfo(Request $request)
    {
        $user  =User::find($request->id);
        $details = ClientMedicalDetail::where('user_id',$request->id)->first();
        return view('client.patient_info')
                ->with([
                        'details'=> $details,
                        'patient_id' => $request->id,
                        'user'=> $user
                    ]);
    }

    public function prescriptions()
    {
        $pres =  \DB::table('prescriptions')
                            ->LeftJoin('users','prescriptions.user_id','=','users.id')
                            ->get();


        // prescription::with('practitioner')
        //                         ->where('user_id', Auth::user()->id)
        //                         ->get();

        return view('client.prescriptions')->with(['prescriptions' => $pres]);
    }

    public function saveBankDetails(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'bank_name' => 'required|alpha',
            'branch_name' => 'required|alpha',
            'account_name' => 'required|alpha',
            'account_number' => 'required|digits:10',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{
             $request['user_id'] = Auth::user()->id;
             $request['balance'] =0;
             ClientBank::create($request->except(['_token']));
             return redirect()->back()->with('status','Record was saved');
         }
    }
    public function topUp(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'amount' => 'required|numeric',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{

           $record  =  ClientBank::where('user_id', Auth::user()->id)->first();
           $new_balance = $record->balance + $request->amount;

           $record->update(['balance' => $new_balance]);
           $accountHis = new ClientAccount();
           $accountHis->account_id = $record->id;
           $accountHis->debt = $request->amount;
           $accountHis->credit =0;
           $accountHis->save();

            return redirect()->back()->with('status','Topup  successful');
         }
    }

    public function getAddBank()
    {
        return view('client.addBank');
    }

    private function plotAvailability($workingDays, $workingHours)
    {
        $slots = [];
        foreach($workingDays as $s)
        {
            $availableHours[$s] = $workingHours;
        }
        return $slots;
    }

    public function bookingView($id)
    {
        $practitioner_data = Practitioner::find($id);

        if(!is_null($practitioner_data))
        {
            $slot = PractitionerSlot::where('practitioner_id',$id)->get()->groupBy('day');
            $clinic = Clinic::first();
            $clinic_data['working_days']  = explode('-',$clinic->working_days);
            $clinic_data['working_hours'] = explode('-',$clinic->working_hours);
            $workingDays  = $this->getBusinessDays($clinic_data);


            $workingHours = $this->workingHours($clinic_data);
            $allHours  = $workingHours;
            $availableHours = [];

            if(count($slot) > 0)
            {
                foreach($slot as $s => $k)
                    {
                        foreach($workingDays as $day)
                            {
                                if($day == $s)
                                {
                                    foreach($k as $value)
                                    {
                                        $index = array_search($value->time,$workingHours);
                                        if($index !== false)
                                        {
                                            unset($workingHours[$index]);
                                            $availableHours[$s] = $workingHours;
                                        }
                                    }
                                }else{
                                    $availableHours[$day] = $allHours;
                                }
                            }
                    }
            }else{
                foreach($workingDays as $s)
                {
                    $availableHours[$s] = $workingHours;
                }
            }

            return view('client.booking')->with(['data'=> $practitioner_data ,'slot'=> $slot ,'working_days' => $workingDays ,'working_hours'=> $availableHours]);
        }else{
            return view("client.404");
        }
    }

    private function workingDaysSpan($record)
    {
        if($record->working_days == "Monday-Friday")
        {
           return 5;
        }
        if($record->working_days == "Monday-Saturday")
        {
            return  6;
        }
        if($record->working_days == "Monday-Sunday")
        {
           return 7;
        }
    }

    public function setAppointment(Request $request)
    {
        try {
            $client = ClinicPatient::where('client_number', $request->client_id)->first();
            if($client == null)
            {
                return response()->json(['status'=> 404, 'message'=> "Client ID invalid"]);
            }else{

               $record = Clinic::latest()->first();
               $client_bank = ClientBank::where('user_id', $client->user_id)->first();

               if(is_null($client_bank) || $client_bank->balance < $record->consultation_fee )
               {
                   return response()->json(['status' => 501 ,'message' => 'Top up your account.Insufficient funds error']);
               }else{

                $nwBalance = $client_bank->balance - $record->consultation_fee;
                $client_bank->update(['balance' => $nwBalance]);

                $newHistory = new ClientAccount();
                $newHistory->credit = $record->consultation_fee;
                $newHistory->debt = 0;
                $newHistory->account_id = $client_bank->id;
                $newHistory->save();

                // $today = Carbon::now()->format('l');
                // $todayIndex = self::days[$today];
                // $chosenDayIndex  = self::days[$request->day];
                // if($todayIndex == $chosenDayIndex)
                // {

                    $new = new PractitionerSlot();
                    $new->day = $request->day;
                  //  $new->date = Carbon::now();
                    $new->time = $request->time;
                    $new->practitioner_id = $request->id;
                    $new->patient_id = $client->user_id;
                    $new->save();
                // }else{
                // }

                return response()->json(['status'=> 200, 'message'=> "created"]);
               }
            }

        } catch (\Throwable $th) {
            return response()->json(['status'=> 500, 'message'=>$th->getMessage()]);
        }

    }

    private function workingHours($clinic_data)
    {
        if(trim($clinic_data['working_hours'][1]) == '16:00')
        {
            $workingDays = ['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00',"16:00"];
        }

        if(trim($clinic_data['working_hours'][1]) == '13:00')
        {
            $workingDays = ['08:00','09:00','10:00','11:00','12:00','13:00'];
        }

        return $workingDays;
    }

    private function getBusinessDays($clinic_data)
    {
        //$today = Carbon::now()->format('l');

        if(trim($clinic_data['working_days'][1]) == 'Friday')
        {
            $workingDays = ['Monday','Tuesday','Wednesday','Thursday','Friday'];
        }

        if(trim($clinic_data['working_days'][1]) == 'Saturday')
        {
            $workingDays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

        }

        if(trim($clinic_data['working_days'][1]) == 'Sunday')
        {
            $workingDays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday', 'Sunday'];

        }
        return $workingDays;
    }

    public function checkoutView()
    {
        return view('client.checkoutView');
    }

    public function getDashboard()
    {
        $appointments = PractitionerSlot::with('practitioner')
                        ->where('patient_id', auth()->user()->id)
                       // ->where('created_at','<=',now())
                        ->get();
        $medDetails  = ClientMedicalDetail::where('user_id',auth()->user()->id)->first();
        $cl =   ClinicPatient::where('user_id', auth()->user()->id)->first();
        return view('client.dashboard')->with(['med_details' => $medDetails, 'appointments' => $appointments ,'client' =>$cl]);
    }

    public function getMedicalRecords()
    {
        return view('client.medical_records');
    }

    public function getMedicalDetails()
    {
        return view('client.medical_details');
    }

    public function getAccounts()
    {
        $bank  = ClientBank::where('user_id', Auth::user()->id)->first();
        if($bank==null)
        {
            return redirect()->to('add_bank');
        }else{

            $account = ClientAccount::where('account_id', $bank->id)->get();
            $accHist = ClientHistory::where('patient_id', Auth::user()->id)->get();

        }
        return view('client.accounts')->with(['bank_data'=> $bank , 'account' => $account ,'accHist' => $accHist]);
    }

    public function getProfile()
    {
        return view('client.profile');
    }

    public function appointmentBooked()
    {
        return view('client.appointmentBooked');
    }
}
