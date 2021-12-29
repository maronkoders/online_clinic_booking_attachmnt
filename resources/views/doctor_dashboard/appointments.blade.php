
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

        <div class="row">
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
                                          <th>Paid Amount</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointments as $item )
                                         <tr>
                                                <td>
                                                <h2 class="table-avatar">

                                                        {{$item->users->name}}
                                                        {{$item->users->surname}}
                                                </h2>
                                                </td>
                                                <td>{{$item->created_at->format('d-F-Y')}} <span class="d-block text-info apt-time">

                                                {{$item->time}}
                                            HRS</span></td>
                                                <td>General</td>

                                                <td> RTGS {{$clinic->consultation_fee}}</td>

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
