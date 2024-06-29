@extends('layouts.admin.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ubah Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('product.update', ['productId' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type= "text" value="{{ $product->name }}"  name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Produk">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stok</label>
                                    <input type="number" value="{{ $product->stock }}" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Stok Produk">
                                    @error('stock')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price">Harga Produk</label>
                                    <input type="number" value="{{ $product->price }}" name="price" class="form-control  @error('price') is-invalid @enderror" placeholder="Harga">
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Keterangan</label>
                                    <input type="text" value="{{ $product->description }}" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Keterangan Produk">
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select name="id_category" class="form-control select2 @error('id_category') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Kategori</option>

                                        @foreach ( $categories as $category )
                                            <option value="{{ $category->id }}" {{ $product->id_category == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Produk (Max 1MB, PNG/JPG)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    @if($product->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('products/'.$product->image)}}" alt="{{ $product->name }}" class="img-thumbnail" style="width: 100px;">
                                        </div>
                                    @endif
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
        // $(document).ready(function() {

        //     $(".js-example-basic-multiple").select2({
        //         maximumSelectionLength: 2
        //     });
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
