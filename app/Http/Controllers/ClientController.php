<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Practitioner;
use App\Models\PractitionerSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ClientController extends Controller
{
    public function searchView()
    {
        $allPractitioners = Practitioner::all();
        return view('client.search')->with(['practitioners' => $allPractitioners]);
    }

    public function bookingView($id)
    {
        $practitioner_data = Practitioner::find($id);
       // $slot = PractitionerSlot::where('practitioner_id',$id)->get();
        $slot =PractitionerSlot::get()->groupBy('day');
        $clinic = Clinic::first();

        $clinic_data['working_days']  = explode('-',$clinic->working_days);
        $clinic_data['working_hours'] = explode('-',$clinic->working_hours);
        $workingDays  = $this->getBusinessDays($clinic_data);
        $workingHours = $this->workingHours($clinic_data);

        $availableHours = [];
        foreach($slot as $s => $k)
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
        }

        return view('client.booking')->with(['data'=> $practitioner_data ,'slot'=> $slot ,'working_days' => $workingDays ,'working_hours'=> $availableHours]);
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
        if(trim($clinic_data['working_days'][1]) == 'Friday')
        {
            $workingDays =['Monday','Tuesday','Wednesday','Thursday','Friday'];

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
        return view('client.dashboard');
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
        return view('client.accounts');
    }

    public function getProfile()
    {
        return view('client.profile');
    }
}
