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
                                <a href="/product_management/createProduct">
                                    <button class="btn btn-outline-primary">
                                        Tambah Produk
                                    </button>
                                </a>
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
                                                        alt="Product 1" class="img-size-32 mr-2">
                                                </td>
                                                <td>{{ $product->price}}</td>
                                                <td>{{ $product->name}}</td>
                                                <td>{{ $product->title}}</td>
                                                {{-- <td>{{ $product->category}}</td> --}}
                                                <td>{{ $product->description }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        
                                                        <a href="{{route('produk.edit', $product->id)}}" class="text-primary mr-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    
                                                        {{-- <form action="{{route ('produk.delete', $product->id_product)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn text-danger border-0">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form> --}}

                                                        <!-- Button Delete menggunakan SweetAlert -->
                                                        <button type="button" class="btn text-danger btn-delete border-0" data-id="{{ $product->id_product }}" >
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
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

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .dt-length label{
            margin-left: 10px;
        }
    </style>
    
    <script>
        // DataTable
        $(document).ready(function() {
            $('#example1').DataTable({
                "language": {
                    "lengthMenu": "_MENU_ Filter",
                    search: 'Cari Produk : '

                }
            });
        });

        // Sweet Alert
        document.addEventListener('DOMContentLoaded', function () {
            // Event listener untuk tombol delete
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function () {
                    // Dapatkan ID Produk dari atribut data-id
                    const productId = this.getAttribute('data-id');

                    // Tampilkan SweetAlert konfirmasi
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak dapat mengembalikan data ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika pengguna mengkonfirmasi, kirim form delete secara dinamis
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = `/product_management/${productId}/delete`

                            // Tambahkan token CSRF ke form
                            const csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfInput);

                            // Tambahkan input method DELETE ke form
                            const methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            form.appendChild(methodInput);

                            // Tambahkan form ke body dan submit
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                });
            });
        });

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