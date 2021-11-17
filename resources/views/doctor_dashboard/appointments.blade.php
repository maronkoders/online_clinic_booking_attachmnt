
@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Appointments</h2>

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
        <nav class="dashboard-menu">
            @include('doctor_dashboard.links')
        </nav>
    </div>
    </div>
    </div>
    <div class="col-md-7 col-lg-8 col-xl-9">
        <div class="appointments-detail">
            <div class="row">
                @foreach ($appointments as $item )
                    <div class="col-md-12 col-sm-6 col-lg-4">
                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="patient-profile.html" class="booking-doc-img">
                                            <img src="assets/img/patients/patient3.jpg" alt="User Image" />
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><a href="patient-profile.html">Carl Kelly</a></h3>
                                            <div class="appointment-action">
                                                <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
                                                    <i class="feather-check-circle"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <div class="patient-details">
                                        <h5><i class="fas fa-user-clock"></i> 9 Nov 2021, 9.00 AM</h5>
                                        <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
                                        <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="a7c4c6d5cbccc2cbcbdee7c2dfc6cad7cbc289c4c8ca">[email&#160;protected]</a></h5>
                                        <h5 class="mb-0"><i class="fas fa-phone"></i> +1 260 724 7769</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

 @endsection
