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
                                <a href="{{ route('product.create') }}">
                                    <button class="btn btn-outline-primary">
                                        Tambah Produk
                                    </button>
                                </a>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger" id="error-alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped dataTable">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar Produk</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ( $products as $product)                       
                                        <tr>
                                            <td>
                                                {{ $loop->iteration++ }}
                                            </td>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                                <img 
                                                    src="{{ asset('products/'.$product->image)}}"
                                                    alt="Product 1"
                                                    class="img-size-64 mr-2"
                                                >
                                            </td>
                                            <td>
                                                {{ $product->price }}
                                            </td>
                                            <td>
                                                {{ $product->category->title }}
                                            </td>
                                            <td>
                                                {{ $product->description }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="{{ route('product.edit', ['productId' => $product->id]) }}" class="text-primary mr-2">
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
                                                    <button type="button" class="btn text-danger btn-delete border-0" data-id="{{ $product->id }}" >
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
        document.addEventListener('DOMContentLoaded', function () {
    
            // DataTable
            $('#example1').DataTable({
                "language": {
                    "lengthMenu": "_MENU_ Filter",
                    search: 'Cari Produk : '
                }
            });
    
            // Function to hide the alert after a few seconds
            function hideAlert(targetId) {
                var target = document.getElementById(targetId);
                if (!target) {
                    console.log(`Element with ID ${targetId} not found`);
                    return;
                }
                console.log(`Hiding element with ID ${targetId}`);
                target.style.display = 'none';
                console.log(`Element with ID ${targetId} hidden`);
            }
    
            // Automatically hide success alert after 3,5 seconds
            setTimeout(() => hideAlert('success-alert'), 3500);
    
            // Automatically hide error alert after 3,5 seconds
            setTimeout(() => hideAlert('error-alert'), 3500);
    
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
                            form.action = `/product_management/${productId}/deleteProduct`;
    
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
        });
    </script>
    

@endsection