@extends('master')
@section('content')
@include('search')
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
          <h2>Clinic and <span>Specialities</span></h2>
       </div>
       <div class="row">
          <div class="col-md-12">
             <ul class="nav nav-tabs nav-tabs-solid">
                <li class="nav-item">
                   <a class="nav-link active" href="#all" data-toggle="tab">All</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#neurology" data-toggle="tab">Neurology</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#orthopedic" data-toggle="tab">Orthopedic</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#cardiologist" data-toggle="tab">Cardiologist</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#dentist" data-toggle="tab">Dentist</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#urology" data-toggle="tab">Urology</a>
                </li>
             </ul>
             <div class="tab-content">
                <div class="tab-pane show active" id="all">
                   <div class="doctor-slider slider">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Sofia Brient</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Louisiana, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $150 - $250
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Marvin Campbell</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Michigan, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $50 - $700
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Katharine Berthold</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Texas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $500
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Linda Tobin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Kansas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $1000
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="search.html" class="btn btn-secondary see-more">See More</a>
                </div>
                <div class="tab-pane" id="neurology">
                   <div class="doctor-slider slider">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Ruby Perrin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Darren Elder</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Sofia Brient</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Louisiana, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $150 - $250
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Linda Tobin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Kansas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $1000
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="search.html" class="btn btn-secondary see-more">See More</a>
                </div>
                <div class="tab-pane" id="orthopedic">
                   <div class="doctor-slider slider">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Sofia Brient</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Louisiana, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $150 - $250
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Marvin Campbell</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Michigan, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $50 - $700
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Katharine Berthold</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Texas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $500
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Linda Tobin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Kansas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $1000
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="search.html" class="btn btn-secondary see-more">See More</a>
                </div>
                <div class="tab-pane" id="cardiologist">
                   <div class="doctor-slider slider">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Marvin Campbell</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality"> MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Michigan, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $50 - $700
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Katharine Berthold</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Texas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $500
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Linda Tobin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Kansas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $1000
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Sofia Brient</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Louisiana, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $150 - $250
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="search.html" class="btn btn-secondary see-more">See More</a>
                </div>
                <div class="tab-pane" id="urology">
                   <div class="doctor-slider slider">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Marvin Campbell</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Michigan, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $50 - $700
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Katharine Berthold</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Texas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $500
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Linda Tobin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Kansas, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $1000
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Sofia Brient</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Louisiana, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $150 - $250
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="search.html" class="btn btn-secondary see-more">See More</a>
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
             <div class="about-content">
                <img src="assets/img/feature.png" class="img-fluid" alt="feature">
             </div>
          </div>
          <div class="col-lg-7">
             <div class="feature-list">
                <div class="row">
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="Feature Image" src="assets/img/features/feature-05.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">Operation</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="Feature Image" src="assets/img/features/feature-06.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">Medical</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/features/feature-05.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">Patient Ward</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/features/feature-02.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">Test Room</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/features/feature-03.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">ICU</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4 col-sm-6">
                      <div class="feature-box">
                         <div class="feature-img">
                            <a href="search.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/features/feature-04.jpg">
                            </a>
                         </div>
                         <div class="feature-content">
                            <h3><a href="search.html">Laboratory</a></h3>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4">
                      <a href="search.html" class="btn btn-primary see-more">See More</a>
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
             <div class="our-doctor">
                <div class="row">
                   <div class="col-lg-3 col-md-6">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Paul Richard</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Ruby Perrin</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Darren Elder</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                      <div class="profile-widget">
                         <div class="doc-img">
                            <a href="doctor-profile.html">
                            <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                            <i class="far fa-bookmark"></i>
                            </a>
                         </div>
                         <div class="pro-content">
                            <h3 class="title">
                               <a href="doctor-profile.html">Deborah Angel</a>
                               <i class="feather-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star filled"></i>
                               <i class="fas fa-star"></i>
                               <span class="d-inline-block average-rating">4.9 ( 82 )</span>
                            </div>
                            <ul class="available-info">
                               <li>
                                  <i class="feather-map-pin"></i> Georgia, USA
                               </li>
                               <li>
                                  <i class="far fa-calendar"></i> Available on Fri, 22 Mar
                               </li>
                               <li>
                                  <i class="far fa-money-bill-alt"></i> $100 - $400
                                  <i class="feather-info" data-toggle="tooltip" title="Lorem Ipsum"></i>
                               </li>
                            </ul>
                            <div class="profile-btn-list">
                               <a href="doctor-profile.html" class="btn btn-primary view-btn">View Profile</a>
                               <a href="booking.html" class="btn book-btn">Book Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection
