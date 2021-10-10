<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Practitioner;
use App\Models\User;
use App\Models\Specialisation;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function doctorDashboard()
    {
        $totalPatients  = 0;
        $totalAppointments =0;

        return view('doctor_dashboard.dashboard')->with(['patients' => $totalPatients, 'appointments' => $totalAppointments]);
    }

    public function getPatients()
    {
        return view('doctor_dashboard.patients');
    }

    public function getAppointments()
    {
        $appointments = array();
        return view('doctor_dashboard.appointments')->with(['appointment'=> $appointments]);
    }

    public function getProfile()
    {
        $user_id = \Auth::user()->id;
        $practitioner = Practitioner::with(['user','specialisation'])->where('user_id', $user_id)->first();
        $specicalisation = Specialisation::all();
        return view('doctor_dashboard.profile')->with(['practitioner'=> $practitioner,'specicalisation'=> $specicalisation]);
    }

    public function adminDashboard()
    {

        $totalPractitioners = 0;
        $totalPatients = 0;
        $totalAppointments = 0;
        $all_patients  = array();
        return view('admin.dashboard')
                    ->with([
                            'total_practitioners'=> $totalPractitioners,
                            'total_patients'=> $totalPatients,
                            'total_appointment'=> $totalAppointments,
                            'all_patients'=> $all_patients]);
    }

    public function addPractitioner()
    {
        $specialisation = Specialisation::all();
        return view('admin.addPractitioner')->with(['specialisation'=>$specialisation]);
    }

    public function addClinic()
    {
        return view('admin.addClinic');
    }

    public function clinicDetails()
    {
        $clinicRecord = Clinic::latest()->first();
        return view('admin.addClinic')->with(['clinic'=> $clinicRecord]);
    }


    public function allPractitioner()
    {
        $allPractitioner = Practitioner::with(['specialisation','user'])->get();
        return view('admin.listPractitioners')->with(['practitioners'=> $allPractitioner]);
    }

}

