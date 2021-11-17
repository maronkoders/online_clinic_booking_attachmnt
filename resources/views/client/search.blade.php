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
             <h2 class="sub-heading mb-0">2245 matches found for : Dentist In Bangalore</h2>
          </div>
          <div class="col-md-4 col-12 d-md-block d-none">
             <div class="sort-by">
                <span class="sort-title">Sort by</span>
                <span class="sortby-fliter">
                   <select class="select">
                      <option>Select</option>
                      <option class="sorting">Rating</option>
                      <option class="sorting">Popular</option>
                      <option class="sorting">Latest</option>
                      <option class="sorting">Free</option>
                   </select>
                </span>
             </div>
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


             <div class="card">
                <div class="card-body">
                   <div class="doctor-widget">
                      <div class="doc-info-left">
                         <div class="doctor-img">
                            <a href="doctor-profile.html">
                            <img src="{{$item->file_name}}" class="img-fluid" alt="User Image">
                            </a>
                         </div>
                         <div class="doc-info-cont">
                            <h4 class="doc-name"><a href="doctor-profile.html">Dr. {{$item->user->name}}  {{$item->user->surname}} <i class="feather-check-circle verified ml-2"></i></a></h4>
                            <p class="doc-speciality">{{$item->specialisation->specialisation_name}}</p>


                            {{-- <div class="clinic-details">
                               <ul class="clinic-gallery">
                                  <li>
                                     <a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
                                     <img src="assets/img/features/feature-01.jpg" alt="Feature">
                                     </a>
                                  </li>
                                  <li>
                                     <a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
                                     <img src="assets/img/features/feature-02.jpg" alt="Feature">
                                     </a>
                                  </li>
                                  <li>
                                     <a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
                                     <img src="assets/img/features/feature-03.jpg" alt="Feature">
                                     </a>
                                  </li>
                                  <li>
                                     <a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
                                     <img src="assets/img/features/feature-04.jpg" alt="Feature">
                                     </a>
                                  </li>
                               </ul>
                            </div> --}}
                            {{-- <div class="clinic-services">
                               <span>Dental Fillings</span>
                               <span> Whitneing</span>
                            </div> --}}
                         </div>
                      </div>
                      <div class="doc-info-right">
                         <div class="clini-infos">
                            <ul>
                               <li><i class="feather-calendar"></i> Available on Fri, 20 Mar</li>
                               <li><i class="feather-map-pin"></i> Florida, USA</li>
                               <li><i class="far fa-money-bill-alt"></i> $300 - $1000 <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
                            </ul>
                         </div>
                         <div class="clinic-booking">
                            {{-- <a class="view-pro-btn" href="doctor-profile.html">View Profile</a> --}}
                            <a class="apt-btn" href="{{url('booking/'.$item->id)}}">Book Now</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>

             @endforeach


             <div class="load-more">
                <a class="btn btn-primary btn-sm" href="javascript:void(0);">Load More</a>
             </div>
          </div>
       </div>
    </div>
 </div>





@endsection
