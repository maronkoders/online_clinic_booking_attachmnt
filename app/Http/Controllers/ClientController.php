<?php

namespace App\Http\Controllers;

use App\Models\Practitioner;
use Illuminate\Http\Request;

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

        return view('client.booking')->with(['data'=> $practitioner_data]);
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
