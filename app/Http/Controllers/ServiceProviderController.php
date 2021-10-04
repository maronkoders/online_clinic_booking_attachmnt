<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Practitioner;
use App\Models\Specialisation;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function doctorDashboard()
    {
        return view('doctor_dashboard.dashboard');
    }

    public function getPatients()
    {
        return view('doctor_dashboard.patients');
    }

    public function getAppointments()
    {
        return view('doctor_dashboard.appointments');
    }

    public function getProfile()
    {
        return view('doctor_dashboard.profile');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
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
        $allPractitioner = Practitioner::all();
        return view('admin.listPractitioners')->with(['practitioners'=> $allPractitioner]);
    }

}

