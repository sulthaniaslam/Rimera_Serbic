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

    <form action="{{ route('partner.tambah.proses') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Tambah data Partner</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="">Nama Instansi</label>
                            <input type="text" name="nama_instansi" id="" class="form-control form-control-sm">
                            @error('nama_instansi')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Logo Instansi</label><br>
                            <input type="file" name="logo_instansi" id="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Simpan</button>
                <a href="{{ route('partner') }}" class="btn btn-sm btn-warning"><i class="fas fa-angle-double-left"></i> Kembali</a>
            </div>
        </div>
    </form>
</section>
@endsection('content')