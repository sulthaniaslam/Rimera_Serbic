@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-clipboard-check"></i> Pendaftaran </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Pendaftaran</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    {{-- <a href="{{ route('pendaftaran.tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah Data</a> --}}

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Pendaftaran</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Asal</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>No Telp</th>
                        <th>Training</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tbl_pendaftaran as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->asal }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->pekerjaan }}</td>
                        <td>{{ $value->no_telp }}</td>
                        <td>{{ $value->nama_training }}</td>
                        <td>
                            {{-- <a href="{{ route('pendaftaran.edit',$value->id) }}" class="btn btn-sm btn-block btn-warning"><i class="fas fa-edit"></i> Edit</a> --}}
                            <form action="{{ route('pendaftaran.hapus',$value->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-block btn-danger mt-1"><i class="fas fa-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection('content')