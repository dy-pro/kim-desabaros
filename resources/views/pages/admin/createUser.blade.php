@extends('layouts.admin.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Pengguna</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input name="name" class="form-control" id="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="address">Alamat</label>
                      <input name="address"  class="form-control" id="exampleInputPassword1" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="custom-select">
                          <option disabled selected>Pilih Role</option>
                          <option>Admin</option>
                          <option>Penjual</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Masukan Foto Profil (Max 1MB, PNG dan JPG)</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" accept=".png, .jpg, .jpeg">
                                <label class="custom-file-label" for="choosefile">Pilih Gambar</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                  </div>
                  <!-- /.card-body -->
            
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
        </div>
      </div>
    </div>
</section>

@endsection