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
}
