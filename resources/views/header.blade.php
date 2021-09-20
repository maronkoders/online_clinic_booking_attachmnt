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
             <a href="index.html" class="navbar-brand logo">
             <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
             </a>
          </div>
          <div class="main-menu-wrapper">
             <div class="menu-header">
                <a href="index.html" class="menu-logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
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
             <li class="nav-item">
                <a class="nav-link header-login" href="{{url('/login')}}">Login</a>
             </li>
             @endguest
          </ul>
       </div>
    </nav>
 </header>
