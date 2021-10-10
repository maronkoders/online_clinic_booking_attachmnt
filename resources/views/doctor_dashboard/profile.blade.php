@extends('master')
@section('content')
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <h2 class="breadcrumb-title">Profile Settings</h2>

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
         <div class="col-md-7 col-lg-8 col-xl-9 basic-info">

            <h4 class="sub-heading">Basic Information</h4>
            <div class="card">
               <div class="card-body">

                  <div class="row form-row">

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>First Name <span class="text-danger">*</span></label>
                           <input type="text" value="{{$practitioner->user->name ?? ''}}" class="form-control" readonly>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Last Name <span class="text-danger">*</span></label>
                           <input type="text" value="{{$practitioner->user->surname?? ''}}" class="form-control" readonly>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Email <span class="text-danger">*</span></label>
                           <input type="text" value="{{$practitioner->user->email??''}}" class="form-control" readonly>
                        </div>
                     </div>

                     <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                           <label>Gender</label>
                           <select class="form-control select" readonly>
                               @if(isset($practitioner))

                                <option @if($practitioner->gender ==1)  selected @endif>Male</option>
                                <option @if($practitioner->gender ==0)  selected @endif>Female</option>
                               @else
                                   <option value="">Gender not set </option>
                               @endif


                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                           <label>Specialisation</label>
                           <select class="form-control select" readonly>
                            @foreach ($specicalisation as $item)
                                <option @if($practitioner->specialisation_id == $item->id) selected @endif>{{$item->specialisation_name}}</option>
                            @endforeach
                           </select>
                        </div>
                     </div>


                  </div>
               </div>
            </div>

            <h4 class="sub-heading">Education</h4>
            <div class="card">
               <div class="card-body">
                  <div class="education-info">
                     <div class="row form-row education-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                           <div class="row form-row">
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group">
                                    <label>College/Institute</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="add-more">
                     <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
                  </div>
               </div>
            </div>
            <h4 class="sub-heading">Experience</h4>
            <div class="card">
               <div class="card-body">
                  <div class="experience-info">
                     <div class="row form-row experience-cont">
                        <div class="col-12 col-md-10 col-lg-11">
                           <div class="row form-row">
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group">
                                    <label>Hospital Name</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-4">
                                 <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                 <div class="form-group">
                                    <label>From</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-lg-2">
                                 <div class="form-group">
                                    <label>To</label>
                                    <input type="text" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="add-more">
                     <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
                  </div>
               </div>
            </div>

            {{-- <div class="submit-section submit-btn-bottom">
               <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
            </div> --}}
         </div>
      </div>
   </div>
</div>
@endsection
