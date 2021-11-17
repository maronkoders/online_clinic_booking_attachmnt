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
Route::get('/profile',[ClientController::class, 'getProfile']);
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

Route::post('/save_clinic',[AdminController::class,'addClinic']);
Route::post('/save_specialisation',[AdminController::class, 'addSpecialisation']);
Route::post('/save_practitioner',[AdminController::class, 'addPractitioner']);
Route::post("/save_experience",[AdminController::class,'saveExperience']);
Route::post("/save_education",[AdminController::class,'saveEducation']);
//General
Route::get('/login',[LoginController::class, 'loginView']);
Route::post('/processLogin',[LoginController::class, 'processLogin']);

Route::get('/logout',[LoginController::class, 'signOut']);


