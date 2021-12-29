<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\ClinicPatient;
use App\Models\Practitioner;
use App\Models\PractitionerEducation;
use App\Models\PractitionerExperience;
use App\Models\Specialisation;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function addClinic(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required| alpha_dash',
            'address' => 'required | alpha_dash',
            'city'=> 'required|alpha',
            'email'=>'required|unique:clinics',
            'phone'=>'required|unique:clinics|digits:10',
            'working_hours' =>'required',
            'working_days' =>'required',
            'consultation_fee' =>'required|integer'
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }else{
             Clinic::create($request->all());
            return redirect()->to('/clinic-details')->with('status','Clinic Data saved');
        }
    }

    public function saveEducation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'degree' => 'required',
            'college' =>'required',
            'completion_year'=>'required'
        ]);


        PractitionerEducation::create($request->all());

        return redirect()->to('/doctor-profile');

                // ->withInput($request->input())
                // ->withErrors("errors", $validator->errors());
    }


    public function savePatientData(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required| alpha',
            'surname' => 'required | alpha',
            'email'=>'required|unique:users',
            'gender' =>'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }else{

            $request['password']  = Hash::make($request->email); //$request->email;
            $request['user_type_id'] =2;
            $user = User::create($request->all());

              $clinic_patient = new ClinicPatient();
              $clinic_patient->user_id = $user->id;
              $clinic_patient->gender = $request->gender;
              $clinic_patient->client_number = \Str::random(10);
              $clinic_patient->save();

            return redirect()->to('/new-patient')->with('status', 'Patient record saved');
        }
    }


    public function saveExperience(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'hospital_name' => 'required',
            'designation' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);

        PractitionerExperience::create($request->all());

        return redirect()->to('/doctor-profile')
        ->withInput($request->input())
        ->withErrors("errors", $validator->errors());
    }

    public function addSpecialisation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'specialisation_name' => 'required|alpha'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{
            Specialisation::create($request->except('_token'));
            return redirect()->to('/add-practitioner')->with('status', 'Record saved');
         }
    }

    public function addPractitioner(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|unique:users',
            'file_name' => 'required|mimes:jpg,png',

        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
         }else{

            $fileName = time().'_'.$request->file_name->getClientOriginalName();
            $filePath = $request->file('file_name')->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $request['file_name'] = $file_path;

            $userType = UserType::where('name', 'Practitioner')->first();

            $newUser = New User();
            $newUser->name = $request->first_name;
            $newUser->surname = $request->last_name;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->email);
            $newUser->user_type_id = $userType->id;
            $newUser->save();

            $request['user_id'] = $newUser->id;
            Practitioner::create($request->except('_token'));
            return redirect()->to('/add-practitioner')->with('status', 'Practitioner record saved');
         }
    }

    public function welcome(Request $request)
    {
        $allSpecialisation = Specialisation::all();
        $doctors = Practitioner::take(5)->get();
        return view('welcome')->with(['specialisations' => $allSpecialisation ,'doctors' => $doctors]);
    }
}

