@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        @if (session()->has('store'))
        <div class="alert alert-primary">
            {{session('store')}}
        </div>
        @elseif(session()->has('update'))
        <div class="alert alert-info">
            {{session('update')}}
        </div>
        @elseif(session()->has('hapus'))
        <div class="alert alert-danger">
            {{session('hapus')}}
        </div>
        @endif
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-chalkboard-teacher"></i> Visi Misi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Visi Misi</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <a href="{{ route('visi_misi_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah Data</a>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <div class="card-title">Visi Misi</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($index as $i)
                    <tr class="text-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$i->visi}}</td>
                        <td>{{$i->misi}}</td>
                        <td>
                            <a href="{{route('edit_visi_misi', $i->id_vm)}}" class="btn btn-sm btn-block btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <form action="{{route('hapus_visi_misi', $i->id_vm)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-block btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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