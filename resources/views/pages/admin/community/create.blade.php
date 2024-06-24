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
            <h3 class="card-title">Tambah Komunitas</h3>
        </div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama Komunitas</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama komunitas" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi komunitas"></textarea>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" placeholder="Masukkan alamat komunitas"></textarea>
                </div>
                
                <div class="form-group">
                    <label>Visi</label>
                    <textarea name="visi" id="visi" class="form-control" rows="3" placeholder="Masukkan visi komunitas"></textarea>
                </div>
    
                <div class="form-group">
                    <label>Misi</label>
                    <textarea name="misi" id="misi" class="form-control" rows="3" placeholder="Masukkan misi komunitas"></textarea>
                </div>
                <div class="form-group">
                    <label for="logo">Logo Komunitas</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="logo">
                        <label class="custom-file-label" for="logo">Pilih gambar</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Unggah</span>
                      </div>
                    </div>
                  </div>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Komunitas</button>
            </div>
        </form>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $(".js-example-basic-multiple").select2({
            maximumSelectionLength: 2
        });
    });
</script>
@endsection