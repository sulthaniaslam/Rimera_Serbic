@extends('templates.template')

@section('title','Tambah Sejarah')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-chalkboard-teacher"></i> Tambah Visi dan Misi</h1>
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
          <form action="{{route('visi_misi_tambah')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="1" class="form-label">Visi</label>
                    <textarea name="visi" cols="10" rows="5" class="form-control" required>
                    </textarea>
                    @error('visi')<div class="alert alert-danger">{{$message}}</div>@enderror
                </div>            
                
              <div class="row">
                    <div class="col-sm-10">
                      <label for="1" class="form-label">Misi</label>
                      {{-- <textarea name="" id="editor1" name="misi" class=""></textarea> --}}
                      <input type="text" name="misi[]" class="form-control mb-3" required>

                        @error('misi')<div class="alert alert-danger">{{$message}}</div>@enderror

                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="" class="text-white">Add</label><br>
                            <button type="button" class="btn btn-sm btn-success" id="add-misi"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>    
              </div>            
             
              <div class="row add-misi">
                <!--  -->
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('visi_misi')}}" class="btn btn-warning">back</a>
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
  <!-- jQuery -->
<script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {

    var unik = 1;

    $('#add-misi').click(function (e) {
      e.preventDefault();
      $('.add-misi').append(` <div class="col-sm-10" id="remove-field-${unik}">
                      <label for="1" class="form-label">Misi</label>
                      <input type="text" name="misi[]" class="form-control mb-3" required>

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


