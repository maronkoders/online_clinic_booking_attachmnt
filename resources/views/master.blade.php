<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{env("APP_NAME")}}</title>
      <link type="image/x-icon" href="{{asset('uploads/psmi-logo.jpg')}}" rel="icon">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/daterangepicker.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/feather.css')}}">
      <link rel="stylesheet" href="{{asset('client_assets/assets/css/style.css')}}">
   </head>
   <body>
      <div class="main-wrapper">
        @include('header')
          @yield('content')
       @include('footer')
      </div>
      <script src="{{asset('client_assets/assets/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/slick.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/moment.min.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/daterangepicker.js')}}"></script>
      <script src="{{asset('client_assets/assets/js/script.js')}}"></script>

   </body>
</html>
