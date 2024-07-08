@extends('layouts.admin.admin')

@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Produk</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.store')  }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  
                  <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                  
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Nama Produk<span class="text-danger">*</span></label>
                      <input  type= "text" name="name" class="form-control"  placeholder="Nama Produk" value="{{ old('name') }}">
                      @error('name')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="stock">Stok<span class="text-danger">*</span></label>
                      <input type="number" name="stock" class="form-control" placeholder="Stok Produk" value="{{ old('stock') }}">
                      @error('stock')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="price">Harga Produk<span class="text-danger">*</span></label>
                      <input type="number" name="price" class="form-control" placeholder="Harga" value="{{ old('price') }}">
                      @error('price')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="description">Keterangan</label>
                      <input type="text" name="description" class="form-control" placeholder="Keterangan Produk" value="{{ old('description') }}">
                      @error('description')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Kategori<span class="text-danger">*</span></label>
                        <select name="id_category" class="form-control select2">
                          <option value="" disabled selected>Pilih Kategori</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('id_category') == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                          @endforeach
                        </select>
                        @error('id_category')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto Produk (Max 1MB, PNG/JPG) <span class="text-danger">*</span></label>
                      <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile" onchange="previewImage(event)">
                            <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                        </div>
                      </div>
                      @error('image')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      {{-- <label>Pratinjau Gambar:</label> --}}
                      <img id="image-preview" src="" alt="Pratinjau Gambar" style="max-width: 200px; display: none;">
                    </div>
                    
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    //Initialize Select2 Elements
    $('.select2').select2()

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
