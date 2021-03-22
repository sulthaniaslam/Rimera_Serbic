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
          <form action="{{route('edit_visi_misi', $edit->id_vm)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="1" class="form-label">Visi</label>
                    <textarea name="visi" cols="10" rows="5" class="form-control" required >
                    {{$edit->visi}}
                    </textarea>
                    @error('visi')<div class="alert alert-danger">{{$message}}</div>@enderror
                </div>            
                
                <div class="mb-3">
                    <label for="1" class="form-label">Misi</label>
                    <textarea name="misi" cols="10" rows="5" class="form-control" required >
                        {{$edit->misi}}
                    </textarea>
                      @error('misi')<div class="alert alert-danger">{{$message}}</div>@enderror
                </div>            

                <button type="Update" class="btn btn-primary">Submit</button>
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


