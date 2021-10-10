
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

    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Richard Wilson</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 14 Nov 2021, 10.00 AM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="addfc4cec5ccdfc9edc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 923 782 4575</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient1.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Charlene Reed </a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 12 Nov 2021, 5.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> North Carolina, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="ea89828b98868f848f988f8f8eaa8f928b879a868fc4898587">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 828 632 9170</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient2.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Travis Trimble</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 11 Nov 2021, 8.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> Maine, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="97e3e5f6e1fee4e3e5fefaf5fbf2d7f2eff6fae7fbf2b9f4f8fa">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 207 729 9974</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient3.jpg" alt="User Image">
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


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient4.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Michelle Fairfax</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 9 Nov 2021, 1.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> Indiana, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="9cf1f5fff4f9f0f0f9fafdf5eefafde4dcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 504 368 6874</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
     <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient5.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Gina Moore</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 8 Nov 2021, 3.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="baddd3d4dbd7d5d5c8dffadfc2dbd7cad6df94d9d5d7">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 954 820 7887</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient6.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Elsie Gilley</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 6 Nov 2021, 9.00 AM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> Kentucky, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="73161f001a16141a1f1f160a33160b121e031f165d101c1e">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 315 384 4562</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4 ">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient7.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Joan Gardner</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 5 Nov 2021, 12.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="eb81848a858c8a998f858e99ab8e938a869b878ec5888486">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 707 2202 603</h5>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="col-md-12 col-sm-6 col-lg-4">
    <div class="card widget-profile pat-widget-profile">
    <div class="card-body">
    <div class="pro-widget-content">
    <div class="profile-info-widget">
    <a href="patient-profile.html" class="booking-doc-img">
    <img src="assets/img/patients/patient8.jpg" alt="User Image">
    </a>
    <div class="profile-det-info">
    <h3><a href="patient-profile.html">Daniel Griffing</a></h3>
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
    <h5><i class="fas fa-user-clock"></i> 5 Nov 2021, 7.00 PM</h5>
    <h5><i class="fas fa-map-marker-alt"></i> New Jersey, United States</h5>
    <h5><i class="fas fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="a4c0c5cacdc1c8c3d6cdc2c2cdcac3e4c1dcc5c9d4c8c18ac7cbc9">[email&#160;protected]</a></h5>
    <h5 class="mb-0"><i class="fas fa-phone"></i> +1 973 773 9497</h5>
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
