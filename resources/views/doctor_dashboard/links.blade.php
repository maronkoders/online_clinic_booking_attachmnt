<ul>
    <li @if (Request::path() =="doctor-dashboard")
    class="active"
@endif >
       <a href="{{url('/doctor-dashboard')}}">
       <span>Dashboard</span>
       <i class="feather-airplay"></i>
       </a>
    </li>
    <li @if (Request::path() =="doctor-appointments")
    class="active"
@endif >
      <a href="{{url('/doctor-appointments')}}">
       <span>Appointments</span>
       <i class="feather-calendar"></i>
       </a>
    </li>
    <li @if (Request::path() =="doctor-patients" || Request::path() == 'patient_info')
    class="active"
@endif >
      <a href="{{url('/doctor-patients')}}">
       <span>My Patients</span>
       <i class="fas fa-user-injured"></i>
       </a>
    </li>

    <li @if (Request::path() =="doctor-profile")
    class="active"
@endif >
      <a href="{{url('/doctor-profile')}}">
       <span>Profile Settings</span>
       <i class="feather-user"></i>
       </a>
    </li>

    <li >
      <a href="{{ url('logout') }}">
       <span>Logout</span>
       <i class="feather-log-out"></i>
       </a>
    </li>
 </ul>
