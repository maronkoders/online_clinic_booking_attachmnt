@extends('master')
@section('content')


<div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8 offset-md-2">
    <div class="account-content">
    <div class="row align-items-center justify-content-center">
    <div class="col-md-7 col-lg-6 login-left">
    </div>
    <div class="col-md-12 col-lg-6 login-right">
    <div class="login-header">
    <h3>Login
    </h3>
    @if(count($errors) > 0 )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </div>
    <form action="{{url('/processLogin')}}"   method="POST">
        @csrf
    <div class="form-group">
    <label>Email</label>
    <input type="email"  name="email" class="form-control">
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
    </div>
    <div class="text-left">
    <a class="forgot-link" href="{{url('/forget_password')}}">Forgot Password ?</a>
    </div>
    <button class="btn btn-primary btn-lg login-btn" type="submit">Login</button>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>



@endsection
