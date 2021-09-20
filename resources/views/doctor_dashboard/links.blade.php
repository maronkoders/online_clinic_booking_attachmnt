<ul>
    <li class="active">
       <a href="{{url('/doctor-dashboard')}}">
       <span>Dashboard</span>
       <i class="feather-airplay"></i>
       </a>
    </li>
    <li>
      <a href="{{url('/doctor-appointments')}}">
       <span>Appointments</span>
       <i class="feather-calendar"></i>
       </a>
    </li>
    <li>
      <a href="{{url('/doctor-patients')}}">
       <span>My Patients</span>
       <i class="fas fa-user-injured"></i>
       </a>
    </li>
    {{-- <li>
       <a href="schedule-timings.html">
       <span>Schedule Timings</span>
       <i class="far fa-hourglass"></i>
       </a>
    </li>
    <li>
       <a href="available-timings.html">
       <span>Available Timings</span>
       <i class="feather-clock"></i>
       </a>
    </li>
    <li>
       <a href="invoices.html">
       <span>Invoices</span>
       <i class="feather-file-text"></i>
       </a>
    </li>
    <li>
       <a href="accounts.html">
       <span>Accounts</span>
       <i class="fas fa-file-invoice-dollar"></i>
       </a>
    </li>
    <li>
       <a href="reviews.html">
       <span>Reviews</span>
       <i class="feather-star"></i>
       </a>
    </li>
  --}}
    <li>
      <a href="{{url('/doctor-profile')}}">
       <span>Profile Settings</span>
       <i class="feather-user"></i>
       </a>
    </li>
  
    {{-- <li>
       <a href="doctor-change-password.html">
       <span>Change Password</span>
       <i class="feather-lock"></i>
       </a>
    </li> --}}
    <li>
      <a href="{{ url('logout') }}">
       <span>Logout</span>
       <i class="feather-log-out"></i>
       </a>
    </li>
 </ul>