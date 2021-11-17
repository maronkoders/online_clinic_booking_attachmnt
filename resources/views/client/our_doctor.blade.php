<div class="our-doctor">
    <div class="row">
        @foreach ($doctors as $doc )
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
                     <a href="doctor-profile.html"> Dr. {{ucfirst($doc->user->name)}} {{ucfirst($doc->user->surname)}}</a>
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
                     <a href="{{url('booking/'.$doc->id)}}" class="btn book-btn">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
        @endforeach
    </div>
 </div>
