@extends('master')
@section('content')
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <h2 class="breadcrumb-title">Practitioners</h2>
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




            <h4 class="sub-heading">Practitioner Speciality</h4>
            <div class="card">
                <form method="POST"  action="{{url('/save_specialisation')}}">
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
                        <div class="col-12 col-md-12">
                           <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="specialisation_name" id="specialisation_name" class="form-control">


                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="add-more">
                    <button type="submit" class="btn btn-primary submit-btn"><i class="fa fa-plus-circle"></i> Add New</button>
                     {{-- <a href="javascript:void(0);" onclick ="addSpecialisation(event)" class="add-reg"><i class="fa fa-plus-circle"></i> Add New</a> --}}
                  </div>
               </div>
                </form>
            </div>


            <h4 class="sub-heading">Practitioner  Information</h4>
            <form  enctype="multipart/form-data" method="POST" action="{{url('/save_practitioner')}}">
             @csrf

            <div class="card">
               <div class="card-body">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>First Name <span class="text-danger">*</span></label>
                           <input type="text" name="first_name" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Last Name <span class="text-danger">*</span></label>
                           <input type="text" name="last_name" class="form-control">
                        </div>
                     </div>
                     {{-- <div class="col-md-6">
                        <div class="form-group">
                           <label>Phone Number</label>
                           <input type="text" name="phone" class="form-control">
                        </div>
                     </div> --}}
                     <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                           <label>Gender</label>
                           <select class="form-control select" name="gender">
                              <option>Select</option>
                              <option  value="0">Male</option>
                              <option  value="1">Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="email" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="form-group">
                           <label>Specialisation</label>
                           <select class="form-control select" name="specialisation_id">
                            <option>Select</option>
                               @foreach ($specialisation as $item )
                               <option value="{{$item->id}}">{{ucfirst($item->specialisation_name)}}</option>
                               @endforeach
                         </select>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-12">

                        <input type="file" name="file_name"  class="custom-file" >
                        <p class="mb-0">Recommended image size is 35px x 35px</p>

                     </div>
                  </div>
               </div>
            </div>

            <div class="submit-section submit-btn-bottom">
               <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
            </div>
        </form>
         </div>
      </div>
   </div>
</div>
<script>


    function addSpecialisation(event)
    {
        let name = document.getElementById("specialisation_name").value;
        let csrf = document.querySelector('meta[name="csrf-token"]').content;

        let data = {
            'specialisation_name':name,
            'token_': csrf
        };

        $.ajax({

            url: "{{url('save_specialisation')}}",
            type: "POST",
            data: data,
            contentType:'application/json',
            success: function(result){


            }});
    }
</script>
@endsection
