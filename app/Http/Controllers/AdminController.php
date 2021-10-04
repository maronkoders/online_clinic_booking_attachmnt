<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Practitioner;
use App\Models\Specialisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function addClinic(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city'=> 'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        $newClinic = Clinic::create($request->all());

        return redirect()->to('/clinic-details')
               ->withInput($request->input())
               ->withErrors("errors", $this->errorBag());
    }


    public function addSpecialisation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'specialisation_name' => 'required'
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
        $fileName = time().'_'.$request->file_name->getClientOriginalName();
        $filePath = $request->file('file_name')->storeAs('uploads', $fileName, 'public');
        $file_path = '/storage/' . $filePath;
        $request['file_name'] =$file_path;

        Practitioner::create($request->except('_token'));
        return redirect()->to('/add-practitioner')->with('status', 'Record saved');

    }
}

