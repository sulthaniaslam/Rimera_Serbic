@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-chart-line"></i> Kegiatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Kegiatan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <a href="{{ route('kegiatan') }}" class="btn btn-sm btn-secondary mb-2"><i class="fas fa-angle-double-left"></i> Kembali</a>

    <form action="{{ route('kegiatan.edit.proses',$tbl_kegiatan->id) }}" method="post">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Edit Kegiatan</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" class="form-control form-control-sm" value="{{ $tbl_kegiatan->id }}">
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="">Nama Kegiatan</label>
                            <input type="text" name="kegiatan" id="" class="form-control form-control-sm" value="{{ $tbl_kegiatan->kegiatan }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" id="" class="form-control form-control-sm" value="{{ $tbl_kegiatan->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" name="keterangan" id="" class="form-control form-control-sm" value="{{ $tbl_kegiatan->keterangan }}">
                        </div>
                    </div>
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