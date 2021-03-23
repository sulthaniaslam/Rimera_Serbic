@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="far fa-address-book"></i> Kontak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    <form action="{{ route('kontak.edit.proses',$tbl_kontak->id) }}" method="post">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Edit data Kontak</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" class="form-control form-control-sm" value="{{ $tbl_kontak->id }}">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="">Jenis Kontak</label>
                            <input type="text" name="jenis_kontak" id="" class="form-control form-control-sm" value="{{ $tbl_kontak->jenis_kontak }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kontak</label>
                            <input type="text" name="kontak" id="" class="form-control form-control-sm" value="{{ $tbl_kontak->kontak }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kontak') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </form>
</section>
@endsection('content')