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
                      <label for="name">Nama Produk</label>
                      <input  type= "text" name="name" class="form-control"  placeholder="Nama Produk">
                    </div>
                    
                    <div class="form-group">
                      <label for="stock">Stok</label>
                      <input type="number" name="stock" class="form-control" placeholder="Stok Produk">
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Harga Produk</label>
                        <input type="number" name="price" class="form-control" placeholder="Harga">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Keterangan</label>
                        <input type="text" name="description" class="form-control" placeholder="Keterangan Produk">
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <select name="id_category" class="form-control select2">
                          <option value="" disabled selected>Pilih Kategori</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Foto Produk (Max 1MB, PNG/JPG)</label>
                      {{-- <input type="file" name="image" class="form-control" placeholder="Keterangan Produk"> --}}
                      <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    // $(document).ready(function() {
    //   $(".js-example-basic-multiple").select2({
    //     maximumSelectionLength: 2
    //   });
    // });

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
</script>

@endsection