@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-12 col-12">
             <h2 class="breadcrumb-title">Patients</h2>

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
                   <h4 class="sub-heading">Patients</h4>
                   <a href="{{url('/new-patient')}}">
                      <button type="submit" class="btn btn-primary submit-btn" style="margin-bottom: 10px;"><i class="fa fa-plus-circle"></i> Add New</button>
                   </a>
                   <br/>
                   <div class="appointment-tab">

                      <div class="tab-content">
                         <div class="tab-pane show active" id="upcoming-appointments">
                            <div class="card card-table mb-0">
                               <div class="card-body">
                                  <div class="table-responsive">
                                     <table class="table table-hover table-center mb-0">
                                        <thead>
                                           <tr>
                                            <th>Client No</th>
                                              <th>Name</th>
                                              <th>Surname</th>
                                              <th>Email</th>
                                              <th>Gender</th>


                                              {{-- <th>Actions</th> --}}
                                           </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($patients as $item )

                                            <tr>
                                                <td>
                                                    <h2>
                                                      {{$item->client_number}}
                                                    </h2>
                                                 </td>
                                                <td>
                                                   <h2 class="table-avatar">
                                                      {{-- <a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a> --}}
                                                     {{$item->users->name}}
                                                   </h2>
                                                </td>
                                                <td>
                                                    {{$item->users->surname}}
                                                </td>

                                                <td>
                                                    {{$item->users->email}}
                                                </td>
                                                <td>
                                                    {{$item->gender}}
                                                </td>



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
