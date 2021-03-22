@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-users"></i> Profil Trainer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Profil Trainer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <a href="{{ route('profil.tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah Data</a>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Profil</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama Trainer</th>
                        <th>Pendidikan</th>
                        <th>Pengalaman Kerja</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tbl_profil as $value)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nama_trainer }}</td>
                        <td>
                            <?php
                            $pendidikan = explode('|', $value->pendidikan);
                            foreach ($pendidikan as $pdd) {
                            ?>
                                <ul>
                                    <li>{{ $pdd }}</li>
                                </ul>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            $pengalaman_kerja = explode('|', $value->pengalaman_kerja);
                            foreach ($pengalaman_kerja as $pgl) {
                            ?>
                                <ul>
                                    <li>{{ $pgl }}</li>
                                </ul>
                            <?php
                            }
                            ?>
                        </td>
                        <td>
                            <a href="{{ route('profil.edit',$value->id) }}" class="btn btn-sm btn-block btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{ route('profil.hapus',$value->id) }}" method="post">
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