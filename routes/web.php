<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceProviderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
//patient
Route::get('/search',[ClientController::class, 'searchView']);
Route::get('/booking',[ClientController::class, 'bookingView']);
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

//Admin

Route::get('/admin-dashboard',[ServiceProviderController::class, 'adminDashboard']);

//Admin
Route::get('/login',[LoginController::class, 'loginView']);
Route::post('/processLogin',[LoginController::class, 'processLogin']);

Route::get('/logout',[LoginController::class, 'signOut']);
