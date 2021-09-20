


@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Accounts</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Accounts</li>
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
    <a href="doctor-profile.html" class="booking-doc-img">
    <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3>Dr. Darren Elder</h3>
    <div class="patient-details">
    <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
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
    <div class="col-lg-6 d-flex">
    <div class="card flex-fill">
    <div class="card-header acc-title">
    <div class="row align-items-center">
    <div class="col-6">
    <h3 class="card-title">Account</h3>
    </div>
    <div class="col-6">
    <div class="text-right">
    <a title="Edit Profile" class="btn bg-info-light btn-sm" href="#account_modal" data-toggle="modal"><i class="feather-edit"></i></a>
    </div>
    </div>
    </div>
    </div>
    <div class="card-body">
    <div class="profile-view-bottom">
    <div class="row">
    <div class="col-6">
    <div class="info-list">
    <div class="title">Bank Name</div>
    <div class="title">Branch Name</div>
    <div class="title">Account Number</div>
    <div class="title mb-0">Account Name</div>
    </div>
    </div>
    <div class="col-6">
    <div class="info-list">
    <div class="text" id="bank_name">Wells Fargo & Co</div>
    <div class="text" id="branch_name">Lenexa</div>
    <div class="text" id="account_no">5396 5250 1908 3838</div>
    <div class="text mb-0" id="account_name">Dr. Darren Elder</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 d-flex">
    <div class="card flex-fill">
    <ul class="account-list">
    <li>
    <h4>Earned <span class="text-success">$90.48</span></h4>
    </li>
    <li>
    <h4>Requested <span class="text-danger">$0.00</span></h4>
    </li>
    <li>
    <h4>Balance <span class="text-info">$90.48</span></h4>
    </li>
    </ul>
    <div class="p-3">
    <a href="#payment_request_modal" class="btn btn-primary request_btn" data-toggle="modal">Payment Request</a>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header">
    
    <nav class="user-tabs">
    <ul class="nav nav-tabs nav-tabs-bottom">
    <li class="nav-item">
    <a class="nav-link active" href="#pat_accounts" data-toggle="tab">Accounts</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#pat_refundrequest" data-toggle="tab">Patients Refund Request</a>
    </li>
    </ul>
    </nav>
    
    </div>
    <div class="">
    
    <div class="tab-content pt-0">
    
    <div id="pat_accounts" class="tab-pane fade show active">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Date</th>
    <th>Patient Name</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>11 Nov 2021 <span class="d-block text-info apt-time">10.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
    </h2>
    </td>
    <td>$150</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
     </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>3 Nov 2021 <span class="d-block text-info apt-time">11.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Charlene Reed <span>#PT0001</span></a>
    </h2>
    </td>
    <td>$200</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>1 Nov 2021 <span class="d-block text-info apt-time">1.00 PM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Travis Trimble <span>#PT0002</span></a>
    </h2>
    </td>
    <td>$75</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>30 Oct 2021 <span class="d-block text-info apt-time">9.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Carl Kelly <span>#PT0003</span></a>
    </h2>
    </td>
    <td>$100</td>
    <td><span class="badge badge-pill warning-status">Pending</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>28 Oct 2021 <span class="d-block text-info apt-time">6.00 PM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Michelle Fairfax <span>#PT0004</span></a>
    </h2>
    </td>
    <td>$350</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>27 Oct 2021 <span class="d-block text-info apt-time">8.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Gina Moore <span>#PT0005</span></a>
    </h2>
    </td>
    <td>$250</td>
    <td><span class="badge badge-pill danger-status">Refunded</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
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
    
    
    <div class="tab-pane fade" id="pat_refundrequest">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Date</th>
    <th>Patient Name</th>
     <th>Amount</th>
    <th>Status</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>11 Nov 2021 <span class="d-block text-info apt-time">10.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
    </h2>
    </td>
    <td>$150</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>3 Nov 2021 <span class="d-block text-info apt-time">11.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Charlene Reed <span>#PT0001</span></a>
    </h2>
    </td>
    <td>$200</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>1 Nov 2021 <span class="d-block text-info apt-time">1.00 PM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Travis Trimble <span>#PT0002</span></a>
    </h2>
    </td>
    <td>$75</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
     <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>30 Oct 2021 <span class="d-block text-info apt-time">9.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Carl Kelly <span>#PT0003</span></a>
    </h2>
    </td>
    <td>$100</td>
    <td><span class="badge badge-pill warning-status">Pending</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>28 Oct 2021 <span class="d-block text-info apt-time">6.00 PM</span></td>
    <td>
    <h2 class="table-avatar">
     <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Michelle Fairfax <span>#PT0004</span></a>
    </h2>
    </td>
    <td>$350</td>
    <td><span class="badge badge-pill success-status">Paid</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
    </a>
    </div>
    </td>
    </tr>
    <tr>
    <td>27 Oct 2021 <span class="d-block text-info apt-time">8.00 AM</span></td>
    <td>
    <h2 class="table-avatar">
    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
    <a href="patient-profile.html">Gina Moore <span>#PT0005</span></a>
    </h2>
    </td>
    <td>$250</td>
    <td><span class="badge badge-pill danger-status">Refunded</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
     </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
    <i class="feather-check-circle"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
    <i class="feather-x-circle"></i>
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