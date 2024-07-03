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
                <form action="{{ route('user.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="card-body">
                    <div class="form-group">
                      <label for="name"><span class="text-danger">*</span>Nama</label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input name="password" type="password"  class="form-control" id="password" placeholder="password">
                      @error('password')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="address">Alamat</label>
                      <input name="address" type="text"  class="form-control" id="address" placeholder="Alamat Lengkap" value="{{ old('address') }}">
                      @error('address')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="whatsapp">No Handphone</label>
                      <input name="whatsapp" type="number" class="form-control" id="whatsapp" placeholder="Nomor WhatsApp" value="{{ old('whatsapp') }}">
                      @error('whatsapp')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="role">Role</label>
                      <select name="role" class="custom-select">
                        <option disabled selected>Pilih Role</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="penjual" {{ old('role') == 'penjual' ? 'selected' : '' }}>Penjual</option>
                      </select>
                      @error('role')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="image">Masukan Foto Profil (Max 1MB, PNG dan JPG)</label>
                      <input type="file" name="image" class="form-control" placeholder="Keterangan Produk">
                      @error('image')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
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