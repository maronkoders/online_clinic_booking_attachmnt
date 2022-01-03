<nav class="dashboard-menu">
    <ul>
        <li  @if (Request::path() =="dashboard") class="active" @endif>
            <a href="{{url('/dashboard')}}">
            <span>Dashboard</span>
            <i class="feather-airplay"></i>
            </a>

        </li>

            <li  @if (Request::path() =="accounts" ||  Request::path() =="add_bank")
            class="active"
        @endif >

            <a href="{{url('/accounts')}}">
            <span>Accounts</span>
            <i class="fas fa-file-invoice-dollar"></i>
            </a>
       </li>

       {{-- <li  @if (Request::path() == "medical-records")
                class="active"
            @endif >

        <a href="{{url('/medical-records')}}">
        <span>Add Medical Records</span>
        <i class="feather-paperclip"></i>
        </a>
    </li> --}}

    <li  @if (Request::path() == "prescriptions")
    class="active"
@endif >

<a href="{{url('/prescriptions')}}">
<span>Prescriptions</span>
<i class="feather-paperclip"></i>
</a>
</li>

     {{-- <li   @if (Request::path() == "medical-details")
     class="active"
 @endif >

        <a href="{{url('/medical-details')}}">
        <span>Medical Details</span>
        <i class="fas fa-user-injured"></i>
        </a>
    </li> --}}

    {{-- <li class="active">
    <a href="{{url('/profile')}}">
    <span>Profile Settings</span>
    <i class="feather-user"></i>
    </a>
    </li> --}}

    <li>
        <a href="{{ url('logout') }}">
         <span>Logout</span>
         <i class="feather-log-out"></i>
         </a>
      </li>
    </ul>
    </nav>
