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
                         <h4><a href="javascript:void(0);">Dr. {{ucfirst($data->user->name)}} {{ucfirst($data->user->surname)}}</a></h4>

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
                                                        <span>
                                                            <input  onclick="selectedTime(event, '{{$day}}')" type="radio" name="selected_time" value="{{$t}}"/>
                                                            {{$t}}</span> <span>HRS
                                                        </span>
                                                    </a>

                                        @endforeach
                                 @endif
                                </li>
                               @endforeach


                            </ul>
                            <span style="color:red;" id="time_error">
                                Select Time to proceed
                          </span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>


             <div class="submit-section proceed-btn text-left">
                <div class="col-md-12 col-lg-12">
                    <div class="card book-info">
                       <form>
                          <div class="info-widget">
                             <div class="card-header">
                                <h4 class="card-title">Personal Information</h4>
                             </div>
                             <div class="card-body">
                                <div class="row">
                                   <div class="col-md-12 col-sm-12">
                                      <div class="form-group">
                                         <label>Client ID</label>
                                         <input class="form-control" type="text" name="client_id"  id="client_id">
                                         <span style="color:red;" id="error_message">
                                                Enter your Client Id to proceed.
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
             </div>


             <div class="submit-section proceed-btn text-left">
                <a href="javascript:void(0);"  onclick="setAppointment(event,'{{$data->id}}')" class="btn btn-primary submit-btn">Set Appointment</a>
             </div>

          </div>
       </div>
    </div>
 </div>


 <script>
     function selectedTime(t, day)
     {
        localStorage.setItem('appointment_time', t.target.value);
        localStorage.setItem('appointment_day', day);
     }

     function setAppointment(e, drId)
     {
         event.preventDefault();
        let clientId = document.getElementById('client_id').value;
        if( localStorage.getItem('appointment_time') !=  null)
        {
            document.getElementById('time_error').style.visibility = "hidden";
        }


        if(clientId!='')
          {
               document.getElementById('error_message').style.visibility = "hidden";
               let formData =
                {
                    _token: "{{ csrf_token() }}",
                    id :drId,
                    time : localStorage.getItem('appointment_time'),
                    day : localStorage.getItem('appointment_day'),
                    client_id : clientId
                }

                $.ajax({
                    type: "POST",
                    url:"{{url('set-appointment')}}",
                    dataType:"json",
                    data:formData,
                    success: function(data, status, xhr)
                    {
                        if(data.status === 200)
                        {
                             location.href  = "/appointment_booked";
                        }
                        if(data.status === 404 || data.status === 501 ){
                            document.getElementById('error_message').style.visibility = "visible";
                            document.getElementById('error_message').innerText = data.message;
                        }

                    },
                    error: function (jqXhr, textStatus, errorMessage)
                    {
                        document.getElementById('error_message').style.visibility = "visible";
                        document.getElementById('error_message').innerText = errorMessage;
                    }
            });
          }
     }
</script>
@endsection
