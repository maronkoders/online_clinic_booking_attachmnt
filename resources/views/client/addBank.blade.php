
@extends('master')
@section('content')

<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Medical Details</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Medical Details</li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>


    <div class="content">
    <div class="container-fluid">
    <div class="row">

    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
    <div class="profile-sidebar">

    <div class="dashboard-widget">
        @include('client.links')
    </div>
    </div>
    </div>

                <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="row">
                <div class="col-sm-12">
                <div class="card">
                <div class="card-header  align-items-sm-center justify-content-sm-between d-sm-flex">
                <h4 class="card-title float-sm-left sub-heading mb-0">Bank details</h4>

                </div>
                <div class="">
                <div>
                <div class="card-body">
                <div>


                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        @if (session('error'))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                       @endif

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




            <form  enctype="multipart/form-data" method="POST" action="{{url('/save_bank_details')}}">
                @csrf



                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Bank Name <span class="text-danger">*</span></label>
                              <input type="text" name="bank_name"  value="{{ old('bank_name') }}"  class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Branch Name <span class="text-danger">*</span></label>
                              <input type="text" name="branch_name" value="{{ old('branch_name') }}"  class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Account Name <span class="text-danger">*</span></label>
                              <input type="text" name="account_name" value="{{ old('account_name') }}"  class="form-control">
                           </div>
                        </div>


                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Account Number <span class="text-danger">*</span></label>
                              <input type="text" name="account_number" value="{{ old('account_number') }}"  class="form-control">
                           </div>
                        </div>

                     </div>


               <div class="submit-section submit-btn-bottom">
                  <button type="submit" class="btn btn-primary submit-btn">Save</button>
               </div>
           </form>


                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
    </div>
    </div>
    </div>



 @endsection
