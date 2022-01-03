<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\ClinicPatient;
use App\Models\Practitioner;
use App\Models\PractitionerExperience;
use App\Models\PractitionerEducation;
use App\Models\PractitionerSlot;
use App\Models\User;
use App\Models\Specialisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    protected $patients;
    protected $practitioner;

    public function __construct()
    {
        $this->patients =  ClinicPatient::with('users')->get();
        $this->practitioners = Practitioner::all();
        $this->appointmentSlots = PractitionerSlot::all();
    }

    public function newPatient()
    {
        return view('admin.newPatient');
    }

    public function clinicPatients()
    {
        $allPatients  =$this->patients;

        return view('admin.clinicPatients')->with(['patients' => $allPatients]);
    }

    public function doctorDashboard()
    {
        $practitioner = Practitioner::where('user_id', Auth::user()->id)->first();
        $totalAppointments = PractitionerSlot::with('users')->where('practitioner_id', $practitioner->id)->count();

        $totalPatients  = count($this->patients);
        $allPatients = array();

        return view('doctor_dashboard.dashboard')->with(['all_patients'=>$allPatients,'patients' => $totalPatients, 'appointments' => $totalAppointments]);
    }

    public function getPatients()
    {
        $practitioner = Practitioner::where('user_id', Auth::user()->id)->first();
        $patients =  PractitionerSlot::with('users')->where('practitioner_id', $practitioner->id)->get();
        return view('doctor_dashboard.patients')->with(['patients'=> $patients]);
    }

    

    public function getAppointments()
    {
        $practitioner = Practitioner::where('user_id', Auth::user()->id)->first();
        $appnt = PractitionerSlot::with('users')->where('practitioner_id', $practitioner->id)->get();
        $clinic = Clinic::first();
        return view('doctor_dashboard.appointments')->with(['appointments'=> $appnt,'clinic'=>$clinic]);
    }

    public function getProfile()
    {
        $user_id = \Auth::user()->id;
        $practitioner = Practitioner::with(['user','specialisation'])->where('user_id', $user_id)->first();
        $specicalisation = Specialisation::all();
        $experience  =  PractitionerExperience::where('practitioner_id',$practitioner->id)->get();
        $education  =  PractitionerEducation::where('practitioner_id',$practitioner->id)->get();

        return view('doctor_dashboard.profile')->with([
            'practitioner'=> $practitioner,
            'specicalisation'=> $specicalisation,
            'experience' => $experience,
            'education' => $education
        ]);
    }

    public function adminDashboard()
    {

        $totalPractitioners = count($this->practitioners);
        $totalPatients = count($this->patients);
        $totalAppointments = count($this->appointmentSlots);
        $allAppnts  = PractitionerSlot::with('users')->get();

        return view('admin.dashboard')
                    ->with([
                            'total_practitioners'=> $totalPractitioners,
                            'total_patients'=> $totalPatients,
                            'total_appointment'=> $totalAppointments,
                            'appointments'=> $allAppnts]);
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

