<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>{{env("APP_NAME")}}</title>
      <link type="image/x-icon" href="{{asset('client_assets/assets/img/favicon.png')}}" rel="icon">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/feather.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/style.css')}}">
      <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="main-wrapper">
        @include('header')
      
          @yield('content')
       @include('footer')
      </div>
      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{asset('client_assets/assets/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/slick.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/script.js')}}"></script>
   </body>
</html>
