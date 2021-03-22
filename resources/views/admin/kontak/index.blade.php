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
    <a href="{{ route('kontak.tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah Data</a>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Kontak</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Jenis Kontak</th>
                        <th>Kontak</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tbl_kontak as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->jenis_kontak }}</td>
                        <td>{{ $value->kontak }}</td>
                        <td>
                            <a href="{{ route('kontak.edit',$value->id) }}" class="btn btn-sm btn-block btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <!-- <a href="" class="btn btn-sm btn-block btn-danger"><i class="fas fa-trash"></i> Hapus</a> -->
                            <form action="{{ route('kontak.hapus',$value->id) }}" method="post">
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