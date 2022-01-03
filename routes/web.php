<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceProviderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class,'welcome']);

//patient
Route::get('/search',[ClientController::class, 'searchView']);
Route::get('/booking/{id}',[ClientController::class, 'bookingView']);
Route::get('/checkout',[ClientController::class, 'checkoutView']);
Route::get('/dashboard',[ClientController::class, 'getDashboard']);
Route::get('/medical-records',[ClientController::class, 'getMedicalRecords']);
Route::get('/medical-details',[ClientController::class, 'getMedicalDetails']);
Route::get('/accounts',[ClientController::class, 'getAccounts']);
Route::get('/appointment_booked',[ClientController::class, 'appointmentBooked']);
Route::get('/profile',[ClientController::class, 'getProfile']);
Route::post('/set-appointment',[ClientController::class,'setAppointment']);
Route::get('/add_bank',[ClientController::class,'getAddBank']);
Route::post('/save_bank_details',[ClientController::class,'saveBankDetails']);
Route::post('/save_medical_data',[ClientController::class,'saveMedicalData']);
Route::post('/save_prescriptions',[ClientController::class,'savePrescriptions']);
Route::post('/top_up',[ClientController::class,'topUp']);
Route::get('/prescriptions',[ClientController::class,'prescriptions']);
Route::get('/patient_info',[ClientController::class,'patientInfo']);

//Doctors
Route::get('/doctor-dashboard',[ServiceProviderController::class, 'doctorDashboard']);
Route::get('/doctor-patients',[ServiceProviderController::class, 'getPatients']);
Route::get('/doctor-appointments',[ServiceProviderController::class, 'getAppointments']);
Route::get('/doctor-profile',[ServiceProviderController::class, 'getProfile']);
Route::get('/add-clinic',[ServiceProviderController::class, 'addClinic']);

//Admin
Route::get('/admin-dashboard',[ServiceProviderController::class, 'adminDashboard']);
Route::get('/add-practitioner',[ServiceProviderController::class, 'addPractitioner']);
Route::get('/all-practitioner',[ServiceProviderController::class, 'allPractitioner']);
Route::get('/clinic-details',[ServiceProviderController::class, 'clinicDetails']);
Route::get('/clinic-patients',[ServiceProviderController::class, 'clinicPatients']);
Route::get('/new-patient',[ServiceProviderController::class, 'newPatient']);

Route::post('/save_clinic',[AdminController::class,'addClinic']);
Route::post('/save_specialisation',[AdminController::class, 'addSpecialisation']);
Route::post('/save_practitioner',[AdminController::class, 'addPractitioner']);
Route::post("/save_experience",[AdminController::class,'saveExperience']);
Route::post("/save_education",[AdminController::class,'saveEducation']);
Route::post("/save_patient_data",[AdminController::class,'savePatientData']);

//General
Route::get('/login',[LoginController::class, 'loginView']);
Route::post('/processLogin',[LoginController::class, 'processLogin']);
Route::get('/logout',[LoginController::class, 'signOut']);


