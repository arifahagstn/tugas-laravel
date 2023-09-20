@extends('template.master')

@section('content')
  {{-- <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Anggota</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section> --}}
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Anggota </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" placeholder="Input Kode Anggota">
                </div>
                <div class="form-group">
                  <label for="nama_anggota">Nama</label>
                  <input type="text" name="nama_anggota" id="nama_anggota"  class="form-control" placeholder="Input Nama Anggota">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                      <select type="text" name="jk_anggota" id="jk_anggota" class="form-control">
                        <option disable selected>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                </div>
                <div class="form-group">
                  <label for="jurusan_anggota">Jurusan</label>
                  <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" placeholder="Input Jurusan Anggota">
                </div>
                <div>
                  <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" placeholder="Input No Telp Anggota">
                </div>  
                <div>
                  <label for="alamat_anggota">Alamat</label>
                    <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" placeholder="Input Alamat Anggota">
                </div>  
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('anggota.index') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Reset</a>
                <button type="reset" class="btn btn-danger">Kembali</button>
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
            <p>Apakah Anda Yakin Akan Mereset Form Create Data Anggota</p>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <a href="{{ route('anggota.index') }}" class="btn btn-primary">Yes</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
@endsection