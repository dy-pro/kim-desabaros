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
                      <label for="name">
                        Nama
                        <span class="text-danger">*</span>
                      </label>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">
                        Email
                        <span class="text-danger">*</span>
                      </label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                      @error('email')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="password">
                        Password
                        <span class="text-danger">*</span>
                      </label>
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
                      <label for="whatsapp">
                        No Handphone
                        <span class="text-danger">*</span>
                      </label>
                      <input name="whatsapp" type="number" class="form-control" id="whatsapp" placeholder="Nomor WhatsApp" value="{{ old('whatsapp') }}">
                      @error('whatsapp')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="role">
                        Role
                        <span class="text-danger">*</span></label>
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
                      <input type="file" id="image" name="image" class="form-control" placeholder="Keterangan Produk" onchange="previewImage(event)">
                      @error('image')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      {{-- <label>Pratinjau Gambar:</label> --}}
                      <img id="image-preview" src="" alt="Pratinjau Gambar" style="max-width: 200px; display: none;">
                    </div>
                        
                  </div>
                    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
        </div>
      </div>
    </div>
</section>
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>
@endsection
