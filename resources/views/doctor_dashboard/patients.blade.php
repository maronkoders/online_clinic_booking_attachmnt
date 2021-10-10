@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title">My Patients</h2>

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
             <div class="row">


                @foreach ($patients as $item)


                <div class="col-md-12 col-sm-6 col-lg-4">
                   <div class="card widget-profile pat-widget-profile">
                      <div class="card-body">
                         <div class="pro-widget-content">
                            <div class="profile-info-widget">
                               <a href="patient-profile.html" class="booking-doc-img">
                               <img src="assets/img/patients/patient1.jpg" alt="User Image">
                               </a>
                               <div class="profile-det-info">
                                  <h3><a href="patient-profile.html">Charlene Reed</a></h3>
                                  <div class="patient-details">
                                     <h5 class="pat-id">Patient ID :<span> P0001</span></h5>
                                     <h5 class="mb-0"><i class="feather-map-pin"></i> North Carolina, USA</h5>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="patient-info">
                            <ul>
                               <li>Phone <span>+1 828 632 9170</span></li>
                               <li>Age <span>29 Years, Female</span></li>
                               <li>Blood Group <span>O+</span></li>
                            </ul>
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
@endsection
