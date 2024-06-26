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
                        <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type= "text" value="{{ $product->name}}"  name="name" class="form-control" placeholder="Nama Produk">
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stok</label>
                                    <input type="number" value="{{ $product->stock }}" name="stock" class="form-control" placeholder="Stok Produk">
                                </div>

                                <div class="form-group">
                                    <label for="price">Harga Produk</label>
                                    <input type="number" value="{{ $product->price }}" name="price" class="form-control" placeholder="Harga">
                                </div>
                                <div class="form-group">
                                    <label for="description">Keterangan</label>
                                    <input type="text" value="{{ $product->description }}" name="description" class="form-control"
                                        placeholder="Keterangan Produk">
                                </div>
                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select  name="category" class="custom-select">
                                        <option disabled>Pilih Kategori</option>
                                        <option value="Makanan"{{ $product->category=='Makanan'?'selected':'' }}>Makanan</option>
                                        <option value="Minuman"{{ $product->category=='Minuman'?'selected':'' }} >Minuman</option>
                                        <option value="Kerajinan"{{ $product->category=='Kerajinan'?'selected':'' }} >Kerajinan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="file"  value="{{ $product->image}}"  name="image" class="form-control"
                                        placeholder="Keterangan Produk">
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
