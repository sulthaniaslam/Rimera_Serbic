@extends('templates.template')

@section('title','Edit Sejarah')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1><i class="fas fa-chalkboard-teacher"></i> Edit Data Sejarah</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
            </div>
        </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
            Form Edit Data
            </h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('edit_sejarah',$edit->id_sejarah)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="1" class="form-label">Sejerah Perusahaan </label>
                    <textarea name="sejarah" cols="10" rows="5" class="form-control" required >
                    {{$edit->sejarah}}
                    </textarea>   
                    @error('sejarah')<div class="alert alert-danger">{{$message}}</div>@enderror
                </div>            
            
                <div class="mb-3">
                    <label for="1" class="form-label">Pilih Photo</label><p>
                    <input type="file" name="photo" id="imgInp" onchange="previewImage();">
                </div> <P>  
                <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" /><p>
                    
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{url('sejarah')}}" class="btn btn-warning">back</a>
            </form>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->

    <script>

    function previewImage() {
        document.getElementById("img-upload").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);

        oFReader.onload = function(oFREvent) {
        document.getElementById("img-upload").src = oFREvent.target.result;
        };
    };
    </script>

  @endsection 


