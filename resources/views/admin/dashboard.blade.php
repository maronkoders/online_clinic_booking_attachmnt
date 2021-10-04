@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title">Dashboard</h2>
             <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">


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
                   <nav class="dashboard-menu">
                       @include('admin.links')

                   </nav>
                </div>
             </div>
          </div>
          <div class="col-md-7 col-lg-8 col-xl-9">
             <div class="row">
                <div class="col-md-12">
                   <div class="dash-card">
                      <div class="">
                         <div class="row">
                            <div class="col-md-12 col-lg-4">
                               <div class="dash-widget">
                                  <div class="dash-widget-info">
                                     <h6 class="text-danger">Total Practitioners</h6>
                                     <div class="dash-widget-count">
                                        <h3>{{$total_practitioners}}</h3>

                                     </div>
                                  </div>
                                  <div class="graph">
                                     <img src="assets/img/icons/icon-01.png" class="img-fluid" alt="patient">
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                               <div class="dash-widget dct-border-rht">
                                  <div class="dash-widget-info">
                                     <h6 class="text-success">Total Patients</h6>
                                     <div class="dash-widget-count">
                                        <h3>{{$total_patients}}</h3>

                                     </div>
                                  </div>
                                  <div class="graph">
                                     <img src="assets/img/icons/icon-02.png" class="img-fluid" alt="patient">
                                  </div>
                               </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                               <div class="dash-widget">
                                  <div class="dash-widget-info">
                                     <h6 class="text-info">Appointments</h6>
                                     <div class="dash-widget-count">
                                        <h3>{{$total_appointment}}</h3>

                                     </div>
                                  </div>
                                  <div class="graph">
                                     <img src="assets/img/icons/icon-03.png" class="img-fluid" alt="patient">
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-12">
                   <h4 class="sub-heading">Patient Appoinment</h4>
                   <div class="appointment-tab">

                      <div class="tab-content">
                         <div class="tab-pane show active" id="upcoming-appointments">
                            <div class="card card-table mb-0">
                               <div class="card-body">
                                  <div class="table-responsive">
                                     <table class="table table-hover table-center mb-0">
                                        <thead>
                                           <tr>
                                              <th>Patient Name</th>
                                              <th>Appt Date</th>
                                              <th>Purpose</th>
                                              <th>Type</th>
                                              <th>Paid Amount</th>
                                              <th>Actions</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                              <td>
                                                 <h2 class="table-avatar">
                                                    <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
                                                    <a href="patient-profile.html">Richard Wilson <span>#PT0016</span></a>
                                                 </h2>
                                              </td>
                                              <td>11 Nov 2021 <span class="d-block text-info apt-time">10.00 AM</span></td>
                                              <td>General</td>
                                              <td>New Patient</td>
                                              <td>$150</td>
                                              <td class="text-left">
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

@endsection
