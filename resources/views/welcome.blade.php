@extends('master')
@section('content')
<section class="section home-tile-section">
    <div class="container">
       <div class="row justify-content-md-center">
          <div class="col-lg-12 col-md-12">
             <div class="doctor-book-card">
                <div class="doctor-book-card-icon">
                   <img src="assets/img/icon-04.png" alt="" class="img-fluid">
                </div>
                <div class="doctor-book-card-content tile-card-content-1">
                   <h3 class="card-title">Visit a Doctor</h3>
                   <p>We hire the best specialists to deliver top-notch diagnostic services for you.</p>
                   <a href="{{url('/search')}}">Book Now</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>


 <section class="section section-specialities">
    <div class="container">
       <div class="section-header">
          <h2><span>Specialities</span></h2>
       </div>
       <div class="row">
          <div class="col-md-12">
             <ul class="nav nav-tabs nav-tabs-solid">
                <li class="nav-item">
                   <a class="nav-link active" href="#all" data-toggle="tab">All</a>
                </li>
                @foreach($specialisations as  $item)
                    <li class="nav-item">
                        <a class="nav-link" href="#{{$item->specialisation_name}}" data-toggle="tab">{{$item->specialisation_name}}</a>
                    </li>
                @endforeach
             </ul>
             <div class="tab-content">
                <div class="tab-pane show active" id="all">

                    @include('client.our_doctor')

                   <a href="{{url('/search')}}" class="btn btn-secondary see-more">See More</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section section-features">
    <div class="container">
       <div class="row">
          <div class="col-lg-5">
             <div class="section-header ">
                <h2>Available Features in <span>Our Clinic</span></h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
             </div>
          </div>
          <div class="col-lg-7">
             <div class="feature-list">
                <div class="row">
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="javascript:void(0);">Operation</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="javascript:void(0);">Medical</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="javascript:void(0);">Patient Ward</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="javascript:void(0);">Test Room</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="javascript:void(0);">ICU</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">

                         <div class="feature-content">
                            <h3><a href="search.html">Laboratory</a></h3>
                         </div>
                      </div>
                   </div>

                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section section-doctor">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header">
                <h2>Book <span>Our Doctor</span></h2>
             </div>
              @include('client.our_doctor')
          </div>
       </div>
    </div>
 </section>

@endsection
