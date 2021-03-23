@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="far fa-handshake"></i> Partner</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Partner</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    <form action="{{ route('partner.edit.proses',$tbl_partner->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Edit data Partner</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" class="form-control form-control-sm" value="{{ $tbl_partner->id }}">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="">Nama Instansi</label>
                            <input type="text" name="nama_instansi" id="" class="form-control form-control-sm" value="{{ $tbl_partner->nama_instansi }}">
                        </div>
                        <div class="form-group">
                            <label for="">Logo Instansi</label><br>
                            <input type="hidden" name="logo_instansi_lama" value="{{ $tbl_partner->logo_instansi }}">
                            <img src="{{'/gambar/'.$tbl_partner->logo_instansi}}" width="30%" alt="" srcset="">
                            <br>
                            <input type="file" name="logo_instansi_baru" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('partner') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </form>
</section>
@endsection('content')