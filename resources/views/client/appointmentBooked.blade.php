@extends('master')
@section('content')

<div class="content success-page-cont">
    <div class="container-fluid">
       <div class="row justify-content-center">
          <div class="col-lg-6">
             <div class="success-cont">
                <img src="{{asset('client_assets/assets/img/icons/check-circle.png')}}" alt="logo">
                <h3>Appointment booked Successfully!</h3>
                <a href="{{url('/')}}" class="btn btn-primary view-inv-btn">Home</a>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
