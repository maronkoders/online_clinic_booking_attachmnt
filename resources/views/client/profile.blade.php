@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Profile Settings</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
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
    <div class="card">
    <div class="card-body">
    
    <form action="https://doccure-html.dreamguystech.com/template2/patient-profile.html">
    <div class="row form-row">
    <div class="col-12 col-lg-8 col-xl-6">
    <div class="form-group">
    <div class="change-avatar pro-setting">
    <div class="profile-img">
    <img src="assets/img/patients/patient.jpg" alt="User Image">
    </div>
    <div class="custom-file" id="customFile1">
    <label class="custom-file-upload">
    <input type="file">
    <span class="change-user">
    <i class="feather-upload"></i> choose-file
    </span>
    </label>
    <p class="mb-0">Recommended image size is 35px x 35px</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row form-row">
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" value="Richard">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" value="Wilson">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Date of Birth</label>
    <div class="cal-icon">
    <input type="text" class="form-control datetimepicker" value="24-07-1983">
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Blood Group</label>
    <select class="form-control select">
    <option>A-</option>
    <option>A+</option>
    <option>B-</option>
    <option>B+</option>
    <option>AB-</option>
    <option>AB+</option>
    <option>O-</option>
    <option>O+</option>
    </select>
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Email ID</label>
    <input type="email" class="form-control" value="richard@example.com">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Mobile</label>
    <input type="text" value="+1 202-555-0125" class="form-control">
    </div>
    </div>
    <div class="col-12">
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" value="806 Twin Willow Lane">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" value="Old Forge">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>State</label>
    <input type="text" class="form-control" value="Newyork">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Zip Code</label>
    <input type="text" class="form-control" value="13420">
    </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="form-group">
    <label>Country</label>
    <input type="text" class="form-control" value="United States">
    </div>
    </div>
    </div>
    <div class="submit-section">
    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>
    </form>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection