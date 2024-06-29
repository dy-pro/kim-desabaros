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
                <form action="{{ route('produk.store')  }}" method="POST" enctype="multipart/form-data">
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
                        <select name="id_category" class="custom-select">
                          <option disabled selected>Pilih Kategori</option>
                          @foreach ($categories as $category)
                              
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="file" name="image" class="form-control" placeholder="Keterangan Produk">
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
<script>
    $(document).ready(function() {

            $(".js-example-basic-multiple").select2({
        maximumSelectionLength: 2
    });
});
</script>
@endsection