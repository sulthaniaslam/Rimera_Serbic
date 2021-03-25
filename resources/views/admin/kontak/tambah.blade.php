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

    <form action="{{ route('kontak.tambah.proses') }}" method="post">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Tambah data Kontak</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Jenis Kontak</label>
                                    <input type="text" name="jenis_kontak[]" id="" class="form-control form-control-sm">
                                    @error('jenis_kontak')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">Kontak</label>
                                    <input type="text" name="kontak[]" id="" class="form-control form-control-sm">
                                    @error('kontak')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="" class="text-white">btn</label><br>
                                    <button type="button" class="btn btn-sm btn-success" id="btn-add-kontak"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row kontak">
                    <!--  -->
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

<!-- jQuery -->
<script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

<script>
    var unik = 1;

    $(document).ready(function() {

        $('#btn-add-kontak').click(function(e) {
            e.preventDefault();
            $('.kontak').append(`<div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3" id="remove-field-${unik}">
                                <div class="form-group">
                                    <label for="">Jenis Kontak</label>
                                    <input type="text" name="jenis_kontak[]" id="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-4" id="remove-field-${unik}">
                                <div class="form-group">
                                    <label for="">Kontak</label>
                                    <input type="text" name="kontak[]" id="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-2" id="remove-button-${unik}">
                                <div class="form-group">
                                    <label for="" class="text-white">btn</label><br>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="removeElement(${unik})"><i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>`);
        });

        function removeElement(unik){
            $('#remove-field-'+unik).remove()
            $('#remove-button-'+unik).remove()
        }

    });
</script>