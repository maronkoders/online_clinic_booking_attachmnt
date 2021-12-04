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
                   <li><i class="feather-map-pin"></i> Harare, Zimbabwe</li>
                </ul>
             </div>
             <div class="clinic-booking">

                <a class="apt-btn" href="{{url('booking/'.$item->id)}}">Book Now</a>
             </div>
          </div>
       </div>
    </div>
 </div>
