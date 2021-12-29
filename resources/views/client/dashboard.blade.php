


@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Dashboard</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
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
        <div class="dashboard-widget">
            @include('client.links')
        </div>
    </div>
    </div>

    <div class="col-md-7 col-lg-8 col-xl-9">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
    <div class="card">
    <div class="card-body text-center">
    <div class="mb-3">
    <img src="assets/img/specialities/pt-dashboard-01.png" alt="" width="55">
    </div>
    <h5>Heart Rate</h5>
    <h6>12 bpm</h6>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
    <div class="card">
    <div class="card-body text-center">
    <div class="mb-3">
    <img src="assets/img/specialities/pt-dashboard-02.png" alt="" width="55">
    </div>
    <h5>Body Temperature</h5>
    <h6>18 C</h6>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
    <div class="card">
    <div class="card-body text-center">
    <div class="mb-3">
    <img src="assets/img/specialities/pt-dashboard-03.png" alt="" width="55">
    </div>
    <h5>Glucose Level</h5>
    <h6>70 - 90</h6>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
    <div class="card">
    <div class="card-body text-center">
    <div class="mb-3">
    <img src="assets/img/specialities/pt-dashboard-04.png" alt="" width="55">
    </div>
    <h5>Blood Pressure</h5>
    <h6>202/90 <sub>mg/dl</sub></h6>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <h4 class="sub-heading mb-4">Patient Appoinment</h4>
    </div>
    </div>
    <div class="row patient-graph-col">
    <div class="col-12">
    <div class="">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
    <div class="graph-box">
    <div>
    <h4>BMI Status</h4>
    </div>
    <div class="graph-img">
    <img src="assets/img/specialities/pt-dashboard-04.png" alt="" width="55">
    </div>
    <div class="graph-status-result">
    <span class="graph-update-date">Last Update 6d</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
    <div class="graph-box">
    <div>
    <h4>Heart Rate Status</h4>
    </div>
    <div class="graph-img">
    <img src="assets/img/specialities/pt-dashboard-01.png" alt="" width="55">
    </div>
    <div class="graph-status-result">
    <span class="graph-update-date">Last Update 2d</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
    <div class="graph-box">
    <div>
    <h4>FBC Status</h4>
    </div>
    <div class="graph-img">
    <img src="assets/img/specialities/pt-dashboard-06.png" alt="" width="55">
    </div>
    <div class="graph-status-result">
    <span class="graph-update-date">Last Update 5d</span>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
    <div class="graph-box">
    <div>
    <h4>Weight Status</h4>
    </div>
    <div class="graph-img">
    <img src="assets/img/specialities/pt-dashboard-07.png" alt="" width="55">
    </div>
    <div class="graph-status-result">
    <span class="graph-update-date">Last Update 3d</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-header dct-appoinment">

    <nav class="user-tabs mb-0">
    <ul class="nav nav-tabs nav-tabs-bottom">
    <li class="nav-item">
    <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
    </li>

    </ul>
    </nav>

    </div>
    <div class="card-body p-0">

    <div class="tab-content pt-0">

    <div id="pat_appointments" class="tab-pane fade show active">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Doctor</th>
    <th>Appt Date</th>
    <th>Booking Date</th>
    <th>Amount</th>
    <th>Follow Up</th>
    <th>Status</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
    </h2>
    </td>
    <td>6 Nov 2021 <span class="d-block text-info">8.00 PM</span></td>
    <td>4 Nov 2021</td>
    <td>$600</td>
    <td>8 Nov 2021</td>
    <td><span class="badge badge-pill success-status">Confirm</span></td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
    <i class="feather-printer"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
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


    <div class="tab-pane fade" id="pat_prescriptions">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">

    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Date </th>
    <th>Name</th>
    <th>Created by </th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    <tr>
    <td>5 Nov 2021</td>
    <td>Prescription 10</td>
    <td>
    <h2 class="table-avatar">
    <a href="doctor-profile.html" class="avatar avatar-sm mr-2">
    <img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
    </a>
    <a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
    </h2>
    </td>
    <td>
    <div class="table-action">
    <a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
    <i class="feather-printer"></i>
    </a>
    <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
    <i class="feather-eye"></i>
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
    </div>
    </div>

    @endsection
