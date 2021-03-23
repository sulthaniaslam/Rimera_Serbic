@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-chart-line"></i> Jadwal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Jadwal</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <a href="{{ route('jadwal') }}" class="btn btn-sm btn-secondary mb-2"><i class="fas fa-angle-double-left"></i> Kembali</a>

    <form action="{{ route('jadwal.tambah.proses') }}" method="post">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Tambah data Jadwal</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="">Nama Jadwal</label>
                            <input type="text" name="nama_jadwal" id="" class="form-control form-control-sm" autofocus>
                            @error('nama_jadwal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" id="" class="form-control form-control-sm">
                            @error('tanggal')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row field-baru">
                    <!--  -->
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Simpan</button>
                <!-- <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-window-close"></i> Cancel</button> -->
            </div>
        </div>
    </form>
</section>
@endsection('content')