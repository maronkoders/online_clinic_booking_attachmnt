
@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Medical Details</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Medical Details</li>
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
    <div class="card-header  align-items-sm-center justify-content-sm-between d-sm-flex">
    <h4 class="card-title float-sm-left sub-heading mb-0">Medical details</h4>
    <a href="#modal_medical_form" class="btn btn-primary float-sm-right btn-add mt-3 mt-sm-0" data-toggle="modal">Add Details</a>
    </div>
    <div class="">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
     <tr>
    <th>#</th>
    <th>Name</th>
    <th>BMI</th>
    <th class="text-center">Heart Rate</th>
    <th class="text-center">FBC Status</th>
    <th>Weight</th>
    <th>Order date</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Richard Wilson</td>
    <td>23.7</td>
    <td class="text-center">89</td>
    <td class="text-center">140</td>
    <td>74Kg</td>
    <td>11 Nov 2021 <span class="d-block text-info apt-time">10.00 AM</span></td>
    <td>
    <div class="table-action">
    <a href="#edit_medical_form" class="btn btn-sm bg-info-light" data-toggle="modal">
    <i class="feather-edit"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-trash-2"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>2</td>
    <td>Champagne</td>
    <td>25.2</td>
    <td class="text-center">92</td>
    <td class="text-center">135</td>
    <td>73Kg</td>
    <td>3 Nov 2021 <span class="d-block text-info apt-time">11.00 AM</span></td>
    <td>
    <div class="table-action">
    <a href="#edit_medical_form" class="btn btn-sm bg-info-light" data-toggle="modal">
    <i class="feather-edit"></i>
     </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-trash-2"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>3</td>
    <td>Vena</td>
    <td>24.5</td>
    <td class="text-center">90</td>
    <td class="text-center">125</td>
    <td>73.5Kg</td>
    <td>1 Nov 2021 <span class="d-block text-info apt-time">1.00 PM</span></td>
    <td>
    <div class="table-action">
    <a href="#edit_medical_form" class="btn btn-sm bg-info-light" data-toggle="modal">
    <i class="feather-edit"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-trash-2"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>4</td>
    <td>Tressie</td>
    <td>24.2</td>
    <td class="text-center">95</td>
    <td class="text-center">128</td>
    <td>10.2Kg</td>
    <td>30 Oct 2021 <span class="d-block text-info apt-time">9.00 AM</span></td>
    <td>
    <div class="table-action">
    <a href="#edit_medical_form" class="btn btn-sm bg-info-light" data-toggle="modal">
    <i class="feather-edit"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-trash-2"></i>
    </a>
     </div>
    </td>
    </tr>
    <tr>
    <td>5</td>
    <td>Christopher</td>
    <td>24.7</td>
    <td class="text-center">99</td>
    <td class="text-center">122</td>
    <td>12.8Kg</td>
    <td>28 Oct 2021 <span class="d-block text-info apt-time">6.00 PM</span></td>
    <td>
    <div class="table-action">
    <a href="#edit_medical_form" class="btn btn-sm bg-info-light" data-toggle="modal">
    <i class="feather-edit"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-trash-2"></i>
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



 @endsection