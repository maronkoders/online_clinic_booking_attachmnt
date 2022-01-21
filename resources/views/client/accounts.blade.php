


@extends('master')
@section('content')


<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <h2 class="breadcrumb-title">Accounts</h2>
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Accounts</li>
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
    <div class="col-lg-6 d-flex">
    <div class="card flex-fill">
    <div class="card-header acc-title">
    <div class="row align-items-center">
    <div class="col-6">
    <h3 class="card-title">Account</h3>
    </div>
    <div class="col-6">
    <div class="text-right">
    <a title="Edit Profile" class="btn bg-info-light btn-sm" href="{{url('add_bank')}}"><i class="feather-edit"></i></a>
    </div>
    </div>
    </div>
    </div>
    <div class="card-body">
    <div class="profile-view-bottom">
    <div class="row">
    <div class="col-6">
    <div class="info-list">
    <div class="title">Bank Name</div>
    <div class="title">Branch Name</div>
    <div class="title">Account Number</div>
    <div class="title mb-0">Account Name</div>
    </div>
    </div>
    <div class="col-6">
    @if($bank_data==null)
        <div class="info-list">
            <div class="text" id="bank_name">-</div>
            <div class="text" id="branch_name">-</div>
            <div class="text" id="account_no">-</div>
            <div class="text mb-0" id="account_name">-</div>
        </div>

    @else

        <div class="info-list">
            <div class="text" id="bank_name">{{$bank_data->bank_name}}</div>
            <div class="text" id="branch_name">{{$bank_data->branch_name}}</div>
            <div class="text" id="account_no">{{$bank_data->account_number}}</div>
            <div class="text mb-0" id="account_name">{{$bank_data->account_name}}</div>
        </div>


    @endif
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 d-flex">
    <div class="card flex-fill">
    <ul class="account-list">
    <li>
    <h4>Balance <span class="text-info"> RTGS {{$bank_data->balance}}</span></h4>
    </li>
    </ul>
    <div class="p-3">
          <div class="col-12">
    <div >

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


        <form  enctype="multipart/form-data" method="POST" action="{{url('/top_up')}}">
            @csrf



                 <div class="row form-row">
                    <div class="col-md-12">
                       <div class="form-group">
                          <label>Amount <span class="text-danger">*</span></label>
                          <input type="text" name="amount"  value="{{ old('amount') }}"  class="form-control">
                       </div>
                    </div>


                 </div>


           <div class="submit-section submit-btn-bottom">
              <button type="submit" class="btn btn-primary submit-btn">Top up</button>
           </div>
       </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header">

    <nav class="user-tabs">
    <ul class="nav nav-tabs nav-tabs-bottom">
    <li class="nav-item">
    <a class="nav-link active" href="#pat_accounts" data-toggle="tab">Accounts History</a>
    </li>
    </ul>
    </nav>

    </div>
    <div class="">

    <div class="tab-content pt-0">

    <div id="pat_accounts" class="tab-pane fade show active">
    <div class="card-table mb-0">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>

    <th>Specialist Name</th>
    <th>Amount</th>
    <th>Description</th>
    <th>Date</th>
    </tr>
    </thead>
    <tbody>

        @foreach($accHist as $his)
            <tr>
                <td>
                <a href="javascript:void(0);">{{$his->name ?? '--'}} {{$his->surname ?? '--'}} <span></span></a>
                </td>

                @if ($his->name !=null)
                <td>({{$his->amount}})</td>
                @else
                <td>{{$his->amount}}</td>
                @endif

                <td>{{$his->description}}</td>
                <td>{{$his->created_at}}<span class="d-block text-info apt-time"></span></td>
            </tr>
    @endforeach
    </tbody>
    </table>
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
    </div>
    </div>

    @endsection
