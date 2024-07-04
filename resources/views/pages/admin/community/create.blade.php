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
                                    <label for="name">
                                        Nama Komunitas
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama komunitas" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>
                                        Deskripsi
                                        <span class="text-danger">*</span>
                                    </label>
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
                                    <label for="logo">Logo Komunitas
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="logo" class="custom-file-input" id="logo" onchange="previewImage(event)">
                                            <label class="custom-file-label" for="logo">Pilih gambar</label>
                                        </div>
                                    </div>
                                    @error('logo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    {{-- <label>Pratinjau Gambar:</label> --}}
                                    <img id="image-preview" src="" alt="Pratinjau Gambar" style="max-width: 200px; display: none;">
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
    // Mengubah label field logo yang akan diunggah
    $(document).ready(function () {
        $('input[type="file"]').on('change', function() {
            var fileName = $(this).val().split('\\').pop(); 
            $(this).next('.custom-file-label').html(fileName);
        });
    });

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
