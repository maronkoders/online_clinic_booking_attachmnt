@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-md-8 col-12">
             <h2 class="breadcrumb-title">Search</h2>
             <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Search</li>
                </ol>
             </nav>
          </div>
       </div>
    </div>
 </div>

 <div class="content">
    <div class="container-fluid">
       <div class="row align-items-center mb-3">
          <div class="col-md-8 col-12">
          </div>
       </div>
       <div class="row">
          <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
             <div class="card search-filter">
                <div class="card-header">
                   <h4 class="card-title mb-0">Search Filter</h4>
                </div>
                <div class="card-body">
                   <div class="filter-widget">
                      <div class="cal-icon">
                         <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                      </div>
                   </div>
                   <div class="filter-widget">
                      <h4>Gender</h4>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="gender_type" checked>
                         <span class="checkmark"></span> Male Doctor
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="gender_type">
                         <span class="checkmark"></span> Female Doctor
                         </label>
                      </div>
                   </div>
                   <div class="filter-widget">
                      <h4>Select Specialist</h4>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist" checked>
                         <span class="checkmark"></span> Urology
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist" checked>
                         <span class="checkmark"></span> Neurology
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist">
                         <span class="checkmark"></span> Dentist
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist">
                         <span class="checkmark"></span> Orthopedic
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist">
                         <span class="checkmark"></span> Cardiologist
                         </label>
                      </div>
                      <div>
                         <label class="custom_check">
                         <input type="checkbox" name="select_specialist">
                         <span class="checkmark"></span> Cardiologist
                         </label>
                      </div>
                   </div>
                   <div class="btn-search">
                      <button type="button" class="btn btn-block">Search</button>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-12 col-lg-8 col-xl-9">

            @foreach ($practitioners as $item)
                @include('client.doctor_info')
             @endforeach


             <div class="load-more">
                <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
             </div>
          </div>
       </div>
    </div>
 </div>





@endsection
