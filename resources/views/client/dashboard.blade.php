


@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Dashboard</h2>
    <div>
        ClIENT ID : {{$client->client_number}}
    </div>

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
            @include('client.links')
        </div>
    </div>
    </div>

    <div class="col-md-7 col-lg-8 col-xl-9">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
    <div class="card">
    <div class="card-body text-center">
    <div class="mb-3">
    <img src="assets/img/specialities/pt-dashboard-01.png" alt="" width="55">
    </div>
    <h5>Heart Rate</h5>
    <h6>{{$med_details->heartRate ?? 0}} bpm</h6>
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
    <h6>{{$med_details->bodyTemperature ?? 0}}  C</h6>
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
    <h6>{{$med_details->glucoseLevel ?? 0 }} </h6>
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
    <h6>{{$med_details->bloodPressure ?? 0 }} <sub>mg/dl</sub></h6>
    </div>
    </div>
    </div>
    </div>

    <div class="card">
    <div class="card-header dct-appoinment">

    <nav class="user-tabs mb-0">
    <ul class="nav nav-tabs nav-tabs-bottom">
    <li class="nav-item">
    <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
    </li>

    </ul>
    </nav>

    </div>
    <div class="card-body p-0">

    <div class="tab-content pt-0">

    <div id="pat_appointments" class="tab-pane fade show active">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Doctor</th>
    <th>Appt Date</th>
    {{-- <th>Booking Date</th>
    <th>Amount</th>
    <th>Status</th>
    <th>Actions</th> --}}
    </tr>
    </thead>
    <tbody>

        @foreach ($appointments as $p)
        <tr>
                <td>
                <h2 class="table-avatar">
                <a href="javascript:void(0);" class="avatar avatar-sm mr-2">

                </a>
                <a href="javascript:void(0);">Dr. {{$p->practitioner->user->name}}  {{$p->practitioner->user->surname}}<span>
                    {{$p->practitioner->specialisation->specialisation_name}}
                </span></a>
                </h2>
                </td>
                <td>{{$p->created_at->format('d-M-y')}} <span class="d-block text-info">{{$p->time}} HRS</span></td>

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
    </div>
    </div>
    </div>

    @endsection
