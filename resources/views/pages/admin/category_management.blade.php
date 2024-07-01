@extends('layouts.admin.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Kategori</h3>
                                    <div class="card-tools">
                                        <a href="/category_management/createCategory"><button class="btn btn-outline-primary">Tambah Kategori</button></a>
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
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                
                                            
                                            <tr>
                                                
                                                <td>{{ $loop->iteration++ }}</td>
                                                <td>
                                                    {{ $category->title }}
                                                </td>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="{{route('category.edit', $category->id) }}" class="text-primary mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{route ('category.destroy', $category->id)}}" method="POST" class="delete-form">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn text-danger btn-delete border-0">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
                                search: 'Cari Kategori : '
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
                                event.preventDefault(); // Mencegah submit form langsung
                
                                // Dapatkan ID Produk dari atribut data-id
                                const form = this.closest('form');
                
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
                                        form.submit(); // Submit form jika pengguna mengkonfirmasi
                                    }
                                });
                            });
                        });
                    });
                </script>
@endsection