
@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Patient Info Details</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
    <li class="breadcrumb-item"> <a href="{{url('doctor-patients')}}">All Patients</a> </li>
    <li class="breadcrumb-item active" aria-current="page">Patient Info Details</li>
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
        @include('doctor_dashboard.links')
        </nav>
    </div>
    </div>
    </div>

    <div class="col-md-7 col-lg-8 col-xl-9">
        <div class="row">
            <div class="col-md-12">
                <h4 class="sub-heading mb-4">{{$user->name}} {{$user->surname}} Medical Details</h4>
                </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
            <div class="card">
            <div class="card-body text-center">
            <div class="mb-3">
            <img src="assets/img/specialities/pt-dashboard-01.png" alt="" width="55">
            </div>
            <h5>Heart Rate</h5>
            <h6>{{$details->heartRate ?? 0}} bpm</h6>
            </div>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
            <div class="card">
            <div class="card-body text-center">
            <div class="mb-3">
            <img src="assets/img/specialities/pt-dashboard-02.png" alt="" width="55">
            </div>
            <h5>Body Temperature</h5>
            <h6>{{$details->bodyTemperature ?? 0}} C</h6>
            </div>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
            <div class="card">
            <div class="card-body text-center">
            <div class="mb-3">
            <img src="assets/img/specialities/pt-dashboard-03.png" alt="" width="55">
            </div>
            <h5>Glucose Level</h5>
            <h6>{{$details->glucoseLevel ?? 0}}</h6>
            </div>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
            <div class="card">
            <div class="card-body text-center">
            <div class="mb-3">
            <img src="assets/img/specialities/pt-dashboard-04.png" alt="" width="55">
            </div>
            <h5>Blood Pressure</h5>
            <h6>{{$details->bloodPressure ?? 0}} <sub>mg/dl</sub></h6>
            </div>
            </div>
            </div>
            </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header  align-items-sm-center justify-content-sm-between d-sm-flex">
    <h4 class="card-title float-sm-left sub-heading mb-0">Update Medical details</h4>
    </div>
        <form method="POST"  action="{{url('/save_medical_data')}}">
            @csrf
       <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
       @endif

       @if(count($errors) > 0 )
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
           </button>
           <ul class="p-0 m-0" style="list-style: none;">
               @foreach($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
           </ul>
       </div>
       @endif

          <div class="registrations-info">
             <div class="row form-row reg-cont">
                <div class="col-6 col-md-6">
                   <div class="form-group">
                      <label>Heart Rate</label>
                      <input type="text" value="{{old('heartRate')}}" name="heartRate" id="specialisation_name" class="form-control">


                   </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-group">
                       <label>Body Temperature</label>
                       <input type="text"  value="{{old('bodyTemperature')}}" name="bodyTemperature" id="specialisation_name" class="form-control">


                    </div>
                 </div>
                 <div class="col-6 col-md-6">
                    <div class="form-group">
                       <label>Glucose Level</label>
                       <input type="text"  value="{{old('glucoseLevel')}}" name="glucoseLevel" id="specialisation_name" class="form-control">


                    </div>
                 </div>
                 <div class="col-6 col-md-6">
                    <div class="form-group">
                       <label>Blood Pressure</label>
                       <input type="hidden" value='{{$patient_id}}' name="user_id" />
                       <input type="text"  value="{{old('bloodPressure')}}" name="bloodPressure" id="specialisation_name" class="form-control">


                    </div>
                 </div>
             </div>
          </div>
          <div class="add-more">
            <button type="submit" class="btn btn-primary submit-btn"><i class="fa fa-plus-circle"></i>Save</button>
          </div>
       </div>
        </form>


    <div class="">
    <div class="card-table mb-0">
    <div class="card-body">
        <div class="table-responsive">

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
        <div class="card-header  align-items-sm-center justify-content-sm-between d-sm-flex">
        <h4 class="card-title float-sm-left sub-heading mb-0">Presciption details</h4>
        </div>
            <form method="POST"  action="{{url('/save_prescriptions')}}">
                @csrf
           <div class="card-body">
              <div class="registrations-info">
                 <div class="row form-row reg-cont">
                    <div class="col-12 col-md-12">
                       <div class="form-group">
                          <label>Description</label>
                          <input type="hidden"  name="user_id" value="{{$patient_id}}"/>
                          <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>

                       </div>
                    </div>
                 </div>
              </div>
              <div class="add-more">
                <button type="submit" class="btn btn-primary submit-btn"><i class="fa fa-plus-circle"></i>Save</button>
              </div>
           </div>
            </form>
        </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>

 @endsection
