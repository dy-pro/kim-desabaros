@extends('layouts.admin.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Komunitas</h3>
                        <div class="card-tools">
                            <a href="/community_management/createCommunity">
                                <button class="btn btn-outline-primary">
                                    Tambah Komunitas
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
                        @if (!empty($communities))
                        <table id="example1" class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Komunitas</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $communities as $community )
                                    <tr>
                                        <td>{{ $loop->iteration++ }}</td>
                                        <td>
                                            <img src="{{ $community->logo ? Storage::url($community->logo) : asset('image/default-user.jpg') }}" alt="logo community"
                                            class="img-size-32 mr-2">
                                            {{ $community->name }}
                                        </td>

                                        <td>
                                            {{ $community->address }}
                                        </td>

                                        <td>
                                            {{ $community->description }}
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('community.edit', ['communityId' => $community->id]) }}" class="text-primary mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                {{-- <form action="{{ route('community.delete', ['communityId' => $community->id]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-muted" style="border: none; background: none; cursor: pointer;">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form> --}}
                                                
                                                <!-- Button Delete menggunakan SweetAlert -->
                                                <button type="button" class="btn text-danger btn-delete border-0" data-id="{{ $community->id }}" >
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                            
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="card-body">
                                Tidak ada data ditemukan!
                            </div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .dt-length label{
        margin-left: 10px;
    }
    </style>

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // DataTable
        $('#example1').DataTable({
            "language": {
                "lengthMenu": "_MENU_ Filter",
                search: 'Cari Komunitas : '
            }
        });

        // Function to hide the alert after a few seconds
        function hideAlert(targetId) {
            var target = document.getElementById(targetId);
            if (!target) {
                console.log(`Element with ID ${targetId} not found`);
                return;
            }
            target.style.display = 'none';
            console.log(`Element with ID ${targetId} hidden`);
        }

        // Automatically hide success alert after 3.5 seconds
        setTimeout(() => hideAlert('success-alert'), 3500);

        // Automatically hide error alert after 3.5 seconds
        setTimeout(() => hideAlert('error-alert'), 3500);

        // Event listener untuk tombol delete
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                // Dapatkan ID komunitas dari atribut data-id
                const communityId = this.getAttribute('data-id');

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
                        form.action = `/community_management/${communityId}/deleteCommunity`;

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
</script>

@endsection