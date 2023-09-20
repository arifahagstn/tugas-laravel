@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Form Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('petugas.update', $petugas[0]->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{$petugas[0]->nama_petugas}}" disabled>
                  </div> 
                  <div class="form-group">
                    <label for="jabatan_petugas">Jabatan Petugas</label>
                    <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{$petugas[0]->jabatan_petugas}}" disabled>
                  </div> 
                    <div class="form-group">
                    <label for="no_telp_petugas">No Telepon Petugas</label>
                    <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{$petugas[0]->no_telp_petugas}}" disabled>
                    </div> 
                    <div class="form-group"> 
                    <label for="alamat_petugas">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" value="{{$petugas[0]->alamat_petugas}}" disabled>
                    </div> 
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('petugas.index')}}" class="btn btn-info">Back</a>
                  </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection