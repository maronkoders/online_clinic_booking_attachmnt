<?php

namespace App\Http\Controllers;

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
}

