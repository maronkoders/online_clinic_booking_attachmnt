<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            return $this->redirectIntenedUser(Auth::user()->user_type_id);
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    private function getUserType($id)
    {
        return UserType::find($id);
    }

    private function redirectIntenedUser($id)
    {
        $userTypeRecord = $this->getUserType($id);

        if($userTypeRecord->name ="Admin")
        {
            return redirect()->intended('admin-dashboard');
        }

        if($userTypeRecord->name ="Customer")
        {
            return redirect()->intended('dashboard');
        }

        if($userTypeRecord->name ="Practitioner")
        {
            return redirect()->intended('doctor-dashboard');
        }

    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
