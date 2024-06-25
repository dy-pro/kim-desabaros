@extends('layouts.admin.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Produk</h3>
                                    <div class="card-tools">
                                        <a href="/product_management/createProduct"><button class="btn btn-outline-primary">Tambah Produk</a>
                                    </div>
                                </div>


                                <div class="card-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <tr>
                                                <th>Nomor Pengguna</th>
                                                <th>Gambar Produk</th>
                                                <th>Harga</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $products as $product)
                                            
                                            <tr>
                                                <td>{{ $loop->iteration++ }}</td>
                                                <td>
                                                    <img src="{{ asset('products/'.$product->image)}}"
                                                        alt="Product 1" class="img-circle img-size-32 mr-2">
                                                </td>
                                                <td>Rp. 100000</td>
                                                <td>{{ $product->name }}</td>
                                                
                                                <td>{{ $product->category }}</td>
                                                
                                                <td>{{ $product->description }}</td>
                                                <td>
                                                    <a href="{{route('produk.edit', $product->id)}}" class="text-primary mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('produk.delete', $product->id)}}" class="text-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    


                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <script>
                
                $(document).ready(function () {
                //   $("#example1").DataTable({
                    
                //     "responsive": true, "lengthChange": false, "autoWidth": false,
                //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                //   $('#example2').DataTable({
                //     "paging": true,
                //     "lengthChange": false,
                //     "searching": false,
                //     "ordering": true,
                //     "info": true,
                //     "autoWidth": false,
                //     "responsive": true,
                //   });
                });
            </script>
@endsection