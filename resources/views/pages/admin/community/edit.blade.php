@extends('layouts.admin.admin')

@section('content')

    <title>Tambah Komunitas</title>
    {{-- <style>
        /* Styling for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            /* max-width: 400px; */
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
        }
        input, select, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
    </style> --}}
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Komunitas</h3>
        </div>
        <form action="{{ route('community.update', ['communityId' => $community->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Komunitas</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $community->name }}" placeholder="Masukkan nama komunitas" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi komunitas">{{ $community->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" placeholder="Masukkan alamat komunitas">{{ $community->address }}</textarea>
                </div>
                
                <div class="form-group">
                    <label>Visi</label>
                    <textarea name="visi" id="visi" class="form-control" rows="3" placeholder="Masukkan visi komunitas">{{ $community->visi }}</textarea>
                </div>
    
                <div class="form-group">
                    <label>Misi</label>
                    <textarea name="misi" id="misi" class="form-control" rows="3" placeholder="Masukkan misi komunitas">{{ $community->misi }}</textarea>
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
                    @if($community->logo)
                        <div class="mt-2">
                            <img src="{{ Storage::url($community->logo) }}" alt="{{ $community->name }}" class="img-thumbnail" style="width: 100px;">
                        </div>
                    @endif
                  </div>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    
</div>

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