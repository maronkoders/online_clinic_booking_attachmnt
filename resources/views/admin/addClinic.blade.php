@extends('master')
@section('content')
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <h2 class="breadcrumb-title">Clinic Details</h2>
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
         <div class="col-md-7 col-lg-8 col-xl-9 basic-info">

            <form  action="{{url('save_clinic')}}" method="POST">
                @csrf

            <h4 class="sub-heading">Contact Details</h4>
            <div class="card contact-card">
               <div class="card-body">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Clinic Name</label>
                            <input type="text"  name="name"  class="form-control" @if(isset($clinic)) value="{{$clinic->name}}"  @else  value="{{ old('name') }}"  @endif >
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">Address</label>
                           <input type="text" name="address" class="form-control" @if(isset($clinic)) value="{{$clinic->address}}"  @else  value="{{ old('address') }}"  @endif >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">City</label>
                           <input type="text" name="city" class="form-control" @if(isset($clinic)) value="{{$clinic->city}}"  @else  value="{{ old('city') }}"  @endif >
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">Telephone </label>
                           <input type="text" name="phone" class="form-control" @if(isset($clinic)) value="{{$clinic->phone}}"  @else  value="{{ old('phone') }}"  @endif >
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label class="control-label">Email</label>
                           <input type="email" name="email" class="form-control" @if(isset($clinic)) value="{{$clinic->email}}"  @else  value="{{ old('email') }}"  @endif >
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">Days</label>

                           <select  class="form-control" name="working_days">

                            <option value="">
                              Select Days
                           </option>

                            <option value="Monday-Friday" >
                                 Monday - Friday

                            </option>
                            <option value="Monday-Saturday">

                                Monday - Saturday

                            </option>
                            <option value="Monday-Sunday">

                                Monday - Sunday

                            </option>

                           </select>

                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">Hours</label>

                           <select  class="form-control" name="working_hours">

                            <option value="">
                                Select hours
                           </option>

                            <option value="08:00 - 16:00" >
                                 08:00 - 16:00

                            </option>
                            <option value="08:00 - 16:30">

                                08:00 - 16:30

                            </option>
                            <option value="08:00 - 13:00`">

                                08:00 - 13:00

                            </option>

                           </select>

                           {{-- <input type="email" name="email" class="form-control" @if(isset($clinic)) value="{{$clinic->email}}"  @else  value="{{ old('email') }}"  @endif > --}}
                        </div>
                     </div>

                  </div>
               </div>
            </div>
        </form>


            <div class="submit-section submit-btn-bottom">
               <button type="submit" class="btn btn-primary submit-btn">Save Clinic Changes</button>
            </div>

         </div>
      </div>
   </div>
</div>
@endsection
