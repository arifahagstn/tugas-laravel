@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Form Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Form</li>
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
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('petugas.update', $petugas[0]->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{$petugas[0]->nama_petugas}}">
                  </div> 
                  @error('nama_petugas')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jabatan_petugas">Jabatan Petugas</label>
                    <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" value="{{$petugas[0]->jabatan_petugas}}">
                  </div> 
                  @error('jabatan_petugas')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    <div class="form-group">
                    <label for="no_telp_petugas">No Telepon Petugas</label>
                    <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control" @error('no_telp_petugas') is-invalid @enderror value="{{$petugas[0]->no_telp_petugas}}">
                    </div>  
                    @error('no_telp_petugas')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                    <label for="alamat_petugas">Alamat Petugas</label>
                    <input type="text" name="alamat_petugas" id="alamat_petugas" class="form-control" @error('alamat_petugas') is-invalid @enderror value="{{$petugas[0]->alamat_petugas}}">
                    </div> 
                    @error('alamat_petugas')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('petugas.index')}}" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" >Back</a>
                  </div>
              </form>
            </div>
            <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
      <div class="modal" tabindex="-1" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Peringatan</h5>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Akan Keluar Dari Form Edit Data Petugas</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <a href="{{ route('petugas.index') }}" class="btn btn-primary">Iya</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection