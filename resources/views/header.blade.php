<header class="header min-header">
    <nav class="navbar navbar-expand-lg header-nav">
       <div class="container">
          <div class="navbar-header">
             <a id="mobile_btn" href="javascript:void(0);">
             <span class="bar-icon">
             <span></span>
             <span></span>
             <span></span>
             </span>
             </a>
             <a href="{{url('/')}}" class="navbar-brand logo">
             <img src="{{asset('uploads/psmi-logo.jpg')}}" class="img-fluid" alt="Logo" width="85px">
             </a>
          </div>
          <div class="main-menu-wrapper">
             <div class="menu-header">
                <a href="{{url('/')}}" class="menu-logo">
                <img src="{{asset('uploads/psmi-logo.jpg')}}" class="img-fluid" alt="Logo"  width="85px">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
                </a>
             </div>

             @guest
             <ul class="main-nav">
                <li class="login-link">
                   <a  href="{{url('/login')}}">Login / Signup</a>
                </li>
             </ul>
             @endguest
          </div>
          <ul class="nav header-navbar-rht">

            @guest

             @if (Request::path() != "/")
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('/')}}">Home</a>
                </li>
             @endif

             <li class="nav-item">
                <a class="nav-link header-login" href="{{url('/login')}}">Login</a>
             </li>
             @endguest
          </ul>
       </div>
    </nav>
 </header>
