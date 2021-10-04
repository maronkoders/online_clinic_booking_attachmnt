<ul>
    <li  @if (Request::path() =="admin-dashboard")
        class="active"
    @endif >
       <a href="{{url('/admin-dashboard')}}">
       <span>Dashboard</span>
       <i class="feather-airplay"></i>
       </a>
    </li>
    <li  @if (Request::path() =="add-practitioner")
    class="active"
@endif >
      <a href="{{url('/add-practitioner')}}">
       <span>Add Practitioner</span>
       <i class="feather-calendar"></i>
       </a>
    </li>
    <li  @if (Request::path() =="all-practitioner")
        class="active"
    @endif >
        <a href="{{url('/all-practitioner')}}">
         <span>Practitioners</span>
         <i class="feather-calendar"></i>
         </a>
      </li>
      <li  @if (Request::path() =="clinic-details")
      class="active"
  @endif >
      <a href="{{url('/clinic-details')}}">
       <span>Clinic Details</span>
       <i class="fas fa-user-injured"></i>
       </a>
    </li>

    <li>
      <a href="{{ url('logout') }}">
       <span>Logout</span>
       <i class="feather-log-out"></i>
       </a>
    </li>
 </ul>
