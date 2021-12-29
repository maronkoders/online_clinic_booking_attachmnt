@extends('master')
@section('content')
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <h2 class="breadcrumb-title">New Patient</h2>
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




            <h4 class="sub-heading">Patient Info</h4>


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

            </div>



            <form  enctype="multipart/form-data" method="POST" action="{{url('/save_patient_data')}}">
             @csrf


            <div class="card">
               <div class="card-body">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>First Name <span class="text-danger">*</span></label>
                           <input type="text" name="name"  value="{{ old('name') }}"  class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Last Name <span class="text-danger">*</span></label>
                           <input type="text" name="surname" value="{{ old('surname') }}"  class="form-control">
                        </div>
                     </div>
                     {{-- <div class="col-md-6">
                        <div class="form-group">
                           <label>Phone Number</label>
                           <input type="text" name="phone" class="form-control">
                        </div>
                     </div> --}}
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>Gender</label>
                           <select class="form-control select" name="gender">
                              <option  value="male">Male</option>
                              <option  value="female">Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                           <label>Email</label>
                           <input type="email" name="email" value="{{ old('email') }}"   class="form-control">
                        </div>
                     </div>

                  </div>
               </div>
            </div>

            <div class="submit-section submit-btn-bottom">
               <button type="submit" class="btn btn-primary submit-btn">Save</button>
            </div>
        </form>

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
