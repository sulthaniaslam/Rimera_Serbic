@extends('templates.template')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-users"></i> Profil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    <form action="{{ route('profil.edit.proses',$tbl_profil->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Edit data profil</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id" class="form-control form-control-sm" value="{{ $tbl_profil->id }}">
                    <div class="col-sm-10">
                        <label for="">Foto Trainer</label><br>
                        <img src="/gambar/{{ $tbl_profil->foto_trainer }}" width="200px" alt="" srcset="">
                        <input type="hidden" name="foto_trainer_lama" value="{{ $tbl_profil->foto_trainer }}"><br>
                        <input type="file" name="foto_trainer_baru" id="" class="mt-2">
                        <div class="form-group">
                            <label for="">Nama Trainer</label>
                            <input type="text" name="nama_trainer" id="" class="form-control form-control-sm" value="{{ $tbl_profil->nama_trainer }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Pendidikan</label>
                                    <?php
                                    $pendidikan = explode('|', $tbl_profil->pendidikan);
                                    foreach ($pendidikan as $pdd) {
                                    ?>
                                        <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm mb-2" value="{{ $pdd }}">
                                    <?php
                                    }
                                    ?>
                                    <button class="btn btn-sm btn-success" id="btn-add-pendidikan"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row pendidikan"></div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Pengalaman Kerja</label>
                                    <?php
                                    $pengalaman_kerja = explode('|', $tbl_profil->pengalaman_kerja);
                                    foreach ($pengalaman_kerja as $pgl) {
                                    ?>
                                        <input type="text" name="pengalaman_kerja[]" id="" class="form-control form-control-sm mb-2" value="{{ $pgl }}">
                                    <?php
                                    }
                                    ?>
                                    <button class="btn btn-sm btn-success" id="btn-add-pengalaman"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row pengalaman"></div>

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('profil') }}" class="btn btn-warning">Back</a>
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

        $('#btn-add-pendidikan').click(function(e) {
            e.preventDefault();
            $('.pendidikan').append(`<div class="col-sm-12" id="remove-field-${unik}"><div class="form-group">
                                <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm mb-2"">
                            <button class="btn btn-sm btn-danger" id="btn-remove-pendidikan"><i class="fas fa-minus"></i></button>
                        </div></div>`);
        });

        $('#btn-add-pengalaman').click(function(e) {
            e.preventDefault();
            $('.pengalaman').append(`<div class="col-sm-12" id="remove-button-${unik}"><div class="form-group">
                                        <input type="text" name="pengalaman_kerja[]" id="" class="form-control form-control-sm mb-2">
                                    <button class="btn btn-sm btn-danger" onclick="removeElement(${unik})"><i class="fas fa-minus"></i></button>
                                </div></div>`);
        });

    });

    function removeElement(unik){
        $('#remove-field-'+unik).remove()
        $('#remove-button-'+unik).remove()
    }

// function previewImage() {
//     document.getElementById("img-upload").style.display = "block";
//     var oFReader = new FileReader();
//     oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);

//     oFReader.onload = function(oFREvent) {
//     document.getElementById("img-upload").src = oFREvent.target.result;
//     };
// };
</script>