
@extends('master')
@section('content')



<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Medical Records</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Medical Records</li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    
    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3>Richard Wilson</h3>
    <div class="patient-details info-loc">
    <h5><i class="feather-gift"></i> 24 Jul 1983, 38 years</h5>
    <h5 class="mb-0"><i class="feather-map-pin"></i> Newyork, USA</h5>
    </div>
    </div>
    </div>
    </div>
    <div class="dashboard-widget">
        @include('client.links')
    </div>
    </div>
    </div>
    
    <div class="col-md-7 col-lg-8 col-xl-9">
    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header">
    
    <nav class="user-tabs mb-0">
    <ul class="nav nav-tabs nav-tabs-bottom">
    <li class="nav-item">
    <a class="nav-link active" href="#pat_medicalrecords" data-toggle="tab">Medical Records</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#pat_prescription" data-toggle="tab">Prescription</a>
    </li>
    </ul>
     </nav>
    
    </div>
    <div class="card-body p-0">
    
    <div class="tab-content pt-0">
    
    <div id="pat_medicalrecords" class="tab-pane fade show active">
    <div class="card-body text-right">
    <a href="#" class="add-new-btn mb-0" data-toggle="modal" data-target="#add_medical_records_modal">Add Medical Records</a>
    </div>
    <div class="border-top card-table mb-0">
    <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Date</th>
    <th>Description</th>
    <th>Attachment</th>
    <th>Orderd By</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Richard Wilson</td>
    <td>11 Nov 2021 <span class="d-block text-info">10.00 AM</span></td>
    <td>Benzaxapine Croplex</td>
    <td>
    <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
    </td>
    <td>Your Self</td>
    <td>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="far fa-trash-alt"></i>
    </a>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td>Vena</td>
    <td>3 Nov 2021 <span class="d-block text-info">11.00 AM</span></td>
    <td>Rapalac Neuronium</td>
    <td>
    <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
    </td>
    <td>Your Self</td>
    <td>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="far fa-trash-alt"></i>
    </a>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td>Tressie</td>
    <td>1 Nov 2021 <span class="d-block text-info">1.00 PM</span></td>
    <td>Ombinazol Bonibamol</td>
    <td>
    <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
    </td>
    <td>Your Self</td>
    <td>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="far fa-trash-alt"></i>
    </a>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td>Richard Wilson</td>
    <td>30 Oct 2021 <span class="d-block text-info">9.00 AM</span></td>
    <td>Dantotate Dantodazole</td>
    <td>
    <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
    </td>
    <td>Your Self</td>
    <td>
     <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="far fa-trash-alt"></i>
    </a>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td>Christopher</td>
    <td>28 Oct 2021 <span class="d-block text-info">6.00 PM</span></td>
    <td>Acetrace Amionel</td>
    <td>
    <a href="javascript:void(0);" title="Download attachment" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i></a>
    </td>
    <td>Your Self</td>
    <td>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="far fa-trash-alt"></i>
    </a>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="tab-pane fade" id="pat_prescription">
    <div class="border-top card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>#</th>
    <th>Date</th>
    <th>Name</th>
    <th>Doctor</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
     <td>1</td>
    <td>11 Nov 2021 <span class="d-block text-info">10.00 AM</span></td>
    <td>Prescription</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td>3 Nov 2021 <span class="d-block text-info">11.00 AM</span></td>
    <td>Prescription</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
     <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td>1 Nov 2021 <span class="d-block text-info">1.00 PM</span></td>
    <td>Prescription</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td>30 Oct 2021 <span class="d-block text-info">9.00 AM</span></td>
    <td>Prescription</td>
    <td>
     <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td>28 Oct 2021 <span class="d-block text-info">6.00 PM</span></td>
    <td>Prescription</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Marvin Campbell <span>Ophthalmology</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>6</td>
    <td>27 Oct 2021 <span class="d-block text-info">8.00 AM</span></td>
    <td>Prescription</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="far fa-eye"></i> View
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="fas fa-print"></i> Print
    </a>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>




 @endsection