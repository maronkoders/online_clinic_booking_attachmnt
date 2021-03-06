@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title">Dashboard</h2>

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
                <div class="col-md-12">
                   <div class="dash-card">
                      <div class="">
                         <div class="row">
                            <div class="col-md-12 col-lg-6">
                               <div class="dash-widget">
                                  <div class="dash-widget-info">
                                     <h6 class="text-danger">Total Patients</h6>
                                     <div class="dash-widget-count">
                                        <h3>{{$patients}}</h3>
                                     </div>
                                  </div>

                               </div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                               <div class="dash-widget">
                                  <div class="dash-widget-info">
                                     <h6 class="text-info">Appoinments</h6>
                                     <div class="dash-widget-count">
                                        <h3>{{$appointments}}</h3>

                                     </div>
                                  </div>

                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             {{-- <div class="row">
                <div class="col-md-12">

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
                                            @foreach ($all_patients as $item )
                                             <tr>
                                                    <td>
                                                    <h2 class="table-avatar">
                                                        <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
                                                        <a href="patient-profile.html">Travis Trimble <span>#PT0002</span></a>
                                                    </h2>
                                                    </td>
                                                    <td>1 Nov 2021 <span class="d-block text-info apt-time">1.00 PM</span></td>
                                                    <td>General</td>
                                                    <td>New Patient</td>
                                                    <td>$75</td>
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
             </div> --}}
          </div>
       </div>
    </div>
 </div>

@endsection
