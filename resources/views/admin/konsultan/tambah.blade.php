@extends('templates.template')

@section('title','Tambah Konsultan')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1><i class="fas fa-chalkboard-teacher"></i> Tambah Data konsultan</h1>
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
            Form Tambah Data
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
        </div>
        <div class="card-body">
        <form action="{{route('konsultan_tambah')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-sm-10">
                    <label for="1" class="form-label">Konsultan Service </label>
                    <input type="text" name="konsultan_servis[]" class="form-control" required>   
                </div>            
                <div class="col-sm-2 mt-1">
                    <div class="form-group">
                        <label for="" class="text-white">Add</label><br>
                        <button type="button" class="btn btn-sm btn-success" id="add-konsultan"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="row add-konsultan">
                <!--  -->
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('konsultan')}}" class="btn btn-warning">back</a>
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
@endsection 

<script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {

    var unik = 1;

    $('#add-konsultan').click(function (e) {
      e.preventDefault();
      $('.add-konsultan').append(` <div class="col-sm-10" id="remove-field-${unik}">
                      <label for="1" class="form-label">Konsultan Servis</label>
                      <input type="text" name="konsultan_servis[]" class="form-control mb-3" required>

                        @error('misi')<div class="alert alert-danger">{{$message}}</div>@enderror

                    </div>
                    <div class="col-sm-2" id="remove-button-${unik}">
                        <div class="form-group">
                            <label for="" class="text-white">Add</label><br>
                            <button type="button" class="btn btn-sm btn-danger" onclick="removeElement(${unik})"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>`);
    });
  });

  function removeElement(unik){
    $('#remove-field-'+unik).remove()
    $('#remove-button-'+unik).remove()
  }
</script>



