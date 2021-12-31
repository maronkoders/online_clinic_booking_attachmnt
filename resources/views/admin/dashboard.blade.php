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
                                              {{-- <th>Type</th> --}}
                                              <th>Paid</th>
                                              {{-- <th>Actions</th> --}}
                                           </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appnt)
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="javascript:void(0);">{{$appnt->users->name}} {{$appnt->users->surname}} <span>
                                                        </span></a>
                                                    </h2>
                                                </td>
                                                <td> {{$appnt->day}}-{{$appnt->created_at->format('d-F-Y')}} <span class="d-block text-info apt-time">{{$appnt->time}}</span></td>
                                                <td>General</td>
                                                <td>YES</td>
                                                {{-- <td class="text-left">
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
                                                </td> --}}
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

@endsection
