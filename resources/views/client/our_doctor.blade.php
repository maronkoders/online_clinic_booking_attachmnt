<div class="our-doctor">
    <div class="row">
        @foreach ($doctors as $doc )
         <div class="col-lg-3 col-md-6">
            <div class="profile-widget">
               <div class="doc-img">
                  <a href="javascript:void(0);">
                  <img class="img-fluid" alt="User Image" src="{{$doc->file_name}}">
                  </a>
                  <a href="javascript:void(0)" class="fav-btn">
                  <i class="far fa-bookmark"></i>
                  </a>
               </div>
               <div class="pro-content">
                  <h3 class="title">
                     <a href="javascript:void(0);"> Dr. {{ucfirst($doc->user->name)}} {{ucfirst($doc->user->surname)}}</a>
                     <i class="feather-check-circle verified"></i>
                  </h3>
                  <p class="speciality">{{ucfirst($doc->specialisation->specialisation_name)}}</p>
                  <ul class="available-info">
                     <li>
                        <i class="feather-map-pin"></i> Harare, Zimbabwe
                     </li>
                     <li>
                        <i class="far fa-calendar"></i> Available on Fri, 22 Mar
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
