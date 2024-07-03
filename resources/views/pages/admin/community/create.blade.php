@extends('layouts.admin.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Komunitas</h3>
                        </div>
                        <form action="{{ route('community.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Komunitas</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama komunitas" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi komunitas">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" id="address" class="form-control" rows="3" placeholder="Masukkan alamat komunitas">{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Visi</label>
                                    <textarea name="visi" id="visi" class="form-control" rows="3" placeholder="Masukkan visi komunitas">{{ old('visi') }}</textarea>
                                    @error('visi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <label>Misi</label>
                                    <textarea name="misi" id="misi" class="form-control" rows="3" placeholder="Masukkan misi komunitas">{{ old('misi') }}</textarea>
                                    @error('misi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="logo">Logo Komunitas</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo">
                                            <label class="custom-file-label" for="logo">Pilih gambar</label>
                                            
                                        </div>
                                      {{-- <div class="input-group-append">
                                        <span class="input-group-text">Unggah</span>
                                      </div> --}}
                                    </div>
                                    @error('logo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah Komunitas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    //Code untuk mengubah label field logo yang akan diunggah
    $(document).ready(function () {
        // Ketika input file berubah (file dipilih)
        $('input[type="file"]').on('change', function() {
            // Ambil file yang dipilih
            var fileName = $(this).val().split('\\').pop(); 
            // Update label custom-file-label dengan nama file yang dipilih
            $(this).next('.custom-file-label').html(fileName);
        });
    });
</script>
@endsection