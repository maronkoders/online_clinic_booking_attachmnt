<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city'=> 'required',
            'email'=>'required',
            'phone'=>'required',
            'working_hours' =>'required',
            'working_days' =>'required'
        ]);
        $newClinic = Clinic::create($request->all());

        return redirect()->to('/clinic-details')
               ->withInput($request->input())
               ->withErrors("errors", $validator->errors());
    }

    public function saveEducation(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'degree' => 'required',
            'college' =>'required',
            'completion_year'=>'required'
        ]);

        PractitionerEducation::create($request->all());

        return redirect()->to('/doctor-profile')
        ->withInput($request->input())
        ->withErrors("errors", $validator->errors());
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
        // $fileName = time().'_'.$request->file_name->getClientOriginalName();
        // $filePath = $request->file('file_name')->storeAs('uploads', $fileName, 'public');
        // $file_path = '/storage/' . $filePath;
        // $request['file_name'] = $file_path;

        $file = $request->file('file_name');
        $file_name = $file->getClientOriginalName();
        $file_ext = $file->getClientOriginalExtension();
        $fileInfo = pathinfo($file_name);
        $filename = $fileInfo['filename'];
        $newname = $filename . "." . $file_ext;
        $destinationPath =  'upload/media';
        $file->move($destinationPath, $newname);
        $filePath = url('/')."/".$destinationPath."/".$newname;
        $request['file_name'] = $filePath;

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
        return redirect()->to('/add-practitioner')->with('status', 'Record saved');

    }

    public function welcome(Request $request)
    {
        $allSpecialisation = Specialisation::all();
        $doctors = Practitioner::take(5)->get();
        return view('welcome')->with(['specialisations' => $allSpecialisation ,'doctors' => $doctors]);
    }
}

