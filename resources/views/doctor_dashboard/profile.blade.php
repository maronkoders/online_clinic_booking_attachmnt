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
        <nav class="dashboard-menu">
            @include('doctor_dashboard.links')
        </nav>
    </div>
    </div>
    </div>
    
    <div class="col-md-7 col-lg-8 col-xl-9 basic-info">
    
    <h4 class="sub-heading">Basic Information</h4>
    <div class="card">
    <div class="card-body">
    <div class="row form-row">
    <div class="col-lg-8 col-xl-6">
    <div class="form-group">
    <div class="change-avatar pro-setting">
    <div class="profile-img">
    <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
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
    <div class="col-md-6">
    <div class="form-group">
    <label>Username <span class="text-danger">*</span></label>
    <input type="text" class="form-control" readonly>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Email <span class="text-danger">*</span></label>
    <input type="email" class="form-control" readonly>
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>First Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Last Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="form-group">
    <label>Gender</label>
    <select class="form-control select">
    <option>Select</option>
    <option>Male</option>
    <option>Female</option>
    </select>
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">About Me</h4>
    <div class="card">
    <div class="card-body">
    <div class="form-group mb-0">
    <label>Biography</label>
    <textarea class="form-control" rows="5"></textarea>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Clinic Info</h4>
    <div class="card">
    <div class="card-body">
    <div class="row form-row">
    <div class="col-md-6">
    <div class="form-group">
    <label>Clinic Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Clinic Address</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label>Clinic Images</label>
    <form action="#" class="dropzone"></form>
    </div>
    <div class="upload-wrap">
    <div class="upload-images">
    <img src="assets/img/icons/feature-01.png" alt="Upload Image">
    <a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
    </div>
    <div class="upload-images">
    <img src="assets/img/icons/feature-01.png" alt="Upload Image">
    <a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Contact Details</h4>
    <div class="card contact-card">
    <div class="card-body">
    <div class="row form-row">
    <div class="col-md-6">
    <div class="form-group">
    <label>Address Line 1</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="control-label">Address Line 2</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="control-label">City</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="control-label">State / Province</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="control-label">Country</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label class="control-label">Postal Code</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Pricing</h4>
    <div class="card">
    <div class="card-body">
    <div class="form-group mb-0">
    <div id="pricing_select">
    <label class="payment-radio credit-card-option custom-control-inline mb-0">
    <input type="radio" id="price_free" name="rating_option" value="price_free" checked="">
    <span class="checkmark"></span>
    Free
    </label>
    <label class="payment-radio credit-card-option mb-0">
    <input type="radio" id="price_custom" name="rating_option" value="custom_price">
    <span class="checkmark"></span>
    Custom Price (per hour)
    </label>
    </div>
    </div>
    <div class="row custom_price_cont" id="custom_price_cont" style="display: none;">
    <div class="col-md-4">
    <input type="text" class="form-control" id="custom_rating_input" name="custom_rating_count" value="" placeholder="20">
    <small class="form-text text-muted">Custom price you can add</small>
    </div>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Services and Specialization</h4>
    <div class="card services-card">
    <div class="card-body">
    <div class="form-group">
    <label>Services</label>
    <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="services" value="Tooth cleaning " id="services">
    <small class="form-text text-muted">Note : Type & Press enter to add new services</small>
    </div>
    <div class="form-group mb-0">
    <label>Specialization </label>
    <input class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" value="Children Care,Dental Care" id="specialist">
    <small class="form-text text-muted">Note : Type & Press enter to add new specialization</small>
     </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Education</h4>
    <div class="card">
    <div class="card-body">
    <div class="education-info">
    <div class="row form-row education-cont">
    <div class="col-12 col-md-10 col-lg-11">
    <div class="row form-row">
    <div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
    <label>Degree</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
    <label>College/Institute</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
    <label>Year of Completion</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="add-more">
    <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Experience</h4>
    <div class="card">
    <div class="card-body">
    <div class="experience-info">
    <div class="row form-row experience-cont">
    <div class="col-12 col-md-10 col-lg-11">
    <div class="row form-row">
    <div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
    <label>Hospital Name</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
    <div class="form-group">
    <label>Designation</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-2">
    <div class="form-group">
    <label>From</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-2">
    <div class="form-group">
    <label>To</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="add-more">
    <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Awards</h4>
    <div class="card">
    <div class="card-body">
    <div class="awards-info">
    <div class="row form-row awards-cont">
    <div class="col-12 col-md-5">
    <div class="form-group">
    <label>Awards</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-5">
    <div class="form-group">
    <label>Year</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    <div class="add-more">
    <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Memberships</h4>
     <div class="card">
    <div class="card-body">
    <div class="membership-info">
    <div class="row form-row membership-cont">
    <div class="col-12 col-md-10 col-lg-5">
    <div class="form-group">
    <label>Memberships</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    <div class="add-more">
    <a href="javascript:void(0);" class="add-membership"><i class="fa fa-plus-circle"></i> Add More</a>
    </div>
    </div>
    </div>
    
    
    <h4 class="sub-heading">Registrations</h4>
    <div class="card">
    <div class="card-body">
    <div class="registrations-info">
    <div class="row form-row reg-cont">
    <div class="col-12 col-md-5">
    <div class="form-group">
    <label>Registrations</label>
    <input type="text" class="form-control">
    </div>
    </div>
    <div class="col-12 col-md-5">
    <div class="form-group">
    <label>Year</label>
    <input type="text" class="form-control">
    </div>
    </div>
    </div>
    </div>
    <div class="add-more">
    <a href="javascript:void(0);" class="add-reg"><i class="fa fa-plus-circle"></i> Add More</a>
    </div>
    </div>
    </div>
    
    <div class="submit-section submit-btn-bottom">
    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection