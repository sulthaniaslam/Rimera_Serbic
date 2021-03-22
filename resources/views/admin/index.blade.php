@extends('templates.template')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Admin</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    
      <span>
        <br>
        <center>
        <h2>
          WELCOME CV.RIMERA SIREBIC
          <br>
        </h2>
        <img src="{{asset('logo/logo.jpeg')}}" width="50%" class="rounded pl-5">
      </center>
      </span>
    
  </div>
@endsection