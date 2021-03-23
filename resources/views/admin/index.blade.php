@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    {{-- <li class="breadcrumb-item active">Jadwal</li> --}}
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    {{-- <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Administrator</div>
        </div>
        <div class="card-body"> --}}
          <center>
            <h1 class="ml-5">Selamat datang Administrator</h1>  
            <img src="{{asset('logo/logo_bersih.png')}}" width="50%" class="rounded pl-5">
          </center>
        {{-- </div>
    </div> --}}
</section>

@endsection('content')