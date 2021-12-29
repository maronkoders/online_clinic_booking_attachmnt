
@extends('master')
@section('content')



<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Prescriptions</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Prescriptions</li>
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
    <div class="dashboard-widget">
        @include('client.links')
    </div>
    </div>
    </div>

    <div class="col-md-7 col-lg-8 col-xl-9">
    <div class="row">
    <div class="col-sm-12">
    <div class="card">

    <div class="card-body p-0">

    <div class="tab-content pt-0">

    <div id="pat_medicalrecords" class="tab-pane fade show active">

    <div class="border-top card-table mb-0">
    <div class="card-body p-0">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
                <tr>
                <th>#</th>
                <th>Date</th>
                <th>Description</th>
                <th>Practitioner Name</th>
                <th>Action</th>
                </tr>
    </thead>
    <tbody>


        @foreach ($prescriptions as  $item)

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

        @endforeach

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
