@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title">Booking</h2>
             <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </div>
 <div class="content">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="card">
                <div class="card-body">
                   <div class="booking-doc-info">
                      <a href="javascript:void(0);" class="booking-doc-img">
                      <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                      </a>
                      <div class="booking-info">
                         <h4><a href="javascript:void(0);">Dr. {{$data->user->name}} {{$data->user->surname}}</a></h4>

                         <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Harare,Zimbabwe</p>
                      </div>
                   </div>
                </div>
             </div>
             <div class="card booking-schedule schedule-widget">
                <div class="schedule-header">
                   <div class="date-booking">
                      <div class="row align-items-center">
                         <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <h4 class="mb-0">{{now()->format('d-F-Y')}}</h4>
                         </div>
                         <div class="col-12 col-sm-6 col-md-2 col-lg-4 text-sm-center">
                            {{-- <p class="text-muted mb-0">{{now()->format('l')}}</p> --}}
                         </div>
                         <div class="col-12 col-sm-8 col-md-6 col-lg-4 text-md-right">
                            {{-- <div class="bookingrange btn btn-white btn-sm">
                               <i class="far fa-calendar-alt mr-2"></i>
                               <span></span>
                               <i class="fas fa-chevron-down ml-2"></i>
                            </div> --}}
                         </div>
                      </div>
                   </div>
                </div>
                <div class="schedule-cont">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="day-slot">
                            <ul>

                                @foreach($working_days as  $day)
                                 <li>
                                    <div class="days">
                                       <span>{{$day}}</span>
                                    </div>
                                 </li>
                                @endforeach
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-12">
                         <div class="time-slot">
                            <ul class="clearfix">


                                @foreach($working_days as  $day)
                                <li>
                                 @if(isset($working_hours[$day]))

                                        @foreach ($working_hours[$day] as  $t)
                                                    <a class="timing" href="javascript:void(0);">
                                                    <span>{{$t}}</span> <span>HRS</span>
                                                    </a>

                                        @endforeach
                                 @endif
                                </li>
                               @endforeach



                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="submit-section proceed-btn text-left">
                <a href="{{}}" class="btn btn-primary submit-btn">Proceed to Pay</a>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
