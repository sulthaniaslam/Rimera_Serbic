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

    <form action="{{ route('profil.tambah.proses') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
                <div class="card-title">Tambah data profil</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="">Foto</label><br>
                                    <input type="file" name="foto_trainer" id="" class="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="">Nama Trainer</label>
                                    <input type="text" name="nama_trainer" id="" class="form-control form-control-sm">
                                    @error('nama_trainer')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row pendidikan">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Pendidikan</label>
                                    <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm">
                                    @error('pendidikan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="" class="text-white">Add</label><br>
                                    <button type="button" class="btn btn-sm btn-success" id="add-pendidikan"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row add-pendidikan">
                            <!--  -->
                        </div>
                        <div class="row pengalaman">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Pengalaman Kerja</label>
                                    <input type="text" name="pengalaman_kerja[]" id="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="" class="text-white">Add</label><br>
                                    <button type="button" class="btn btn-sm btn-success" id="add-pengalaman"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row add-pengalaman">
                            <!--  -->
                        </div>
                        <div class="mb-3">
                            <label for="1" class="form-label">Pilih Photo</label><p>
                            <input type="file" name="photo" id="imgInp" onchange="previewImage();">
                        </div> <P>
                        <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" /><p>
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
    $(document).ready(function() {
        $('#add-pendidikan').click(function(e) {
            e.preventDefault();
            $('.add-pendidikan').append(`<div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" name="pendidikan[]" id="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-danger" id="remove-pendidikan"><i class="fas fa-minus"></i></button>
                                </div>
                            </div>`);
        });

        $('#add-pengalaman').click(function(e) {
            e.preventDefault();
            $('.add-pengalaman').append(`<div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" name="pengalaman_kerja[]" id="" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-danger" id="remove-pengalaman"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>`);
        });
    });

    function previewImage() {
      document.getElementById("img-upload").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);
  
      oFReader.onload = function(oFREvent) {
        document.getElementById("img-upload").src = oFREvent.target.result;
      };
    };

</script>