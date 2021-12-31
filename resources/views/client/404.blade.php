@extends('master')
@section('content')

<div class="content success-page-cont">
    <div class="container-fluid">
       <div class="row justify-content-center">
          <div class="col-lg-6">
             <div class="success-cont">

                <h3>


                    Sorry no record was found. Return to the home page by clicking the button below:</h3>
                <a href="{{url('/')}}" class="btn btn-primary view-inv-btn">Home</a>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
