@extends('template.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Form Anggota</h1>
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
                <h3 class="card-title">Form Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start --> 
              <form action="{{ route('anggota.update', $anggotas[0]->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" value="{{$anggotas[0]->kode_anggota}}" disabled>
                  </div> 
                  <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{$anggotas[0]->nama_anggota}}" disabled>
                  </div> 
                  <div class="form-group">
                    <label for="jk_anggota">Jenis Kelamin</label>
                        <input type="text" name="jk_anggota" id="jk_anggota" class="form-control" value="{{$anggotas[0]->jk_anggota}}" disabled>
                  </div>
                    <div class="form-group">
                      <label for="jurusan_anggota">Jurusan</label>
                      <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" value="{{$anggotas[0]->jurusan_anggota}}" disabled>
                    </div>
                    <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" value="{{$anggotas[0]->no_telp_anggota}}" disabled>
                    </div> 
                    <div class="form-group"> 
                    <label for="alamat_anggota">Alamat</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" value="{{$anggotas[0]->alamat_anggota}}" disabled>
                    </div> 
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('anggota.index')}}" class="btn btn-info">Back</a>
                  </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection