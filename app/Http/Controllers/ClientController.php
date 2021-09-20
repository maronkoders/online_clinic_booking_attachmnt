<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function searchView()
    {
        return view('client.search');
    }

    public function bookingView()
    {
        return view('client.booking');
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
