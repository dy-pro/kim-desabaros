@extends('layouts.admin.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Komunitas</h3>
                        <div class="card-tools">
                        <a href="/community_management/createCommunity">
                            <button class="btn btn-outline-primary">Tambah
                                Komunitas
                            </button>    
                        </a>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        @if (!empty($communities))
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Nama Komunitas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $communities as $community )
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($community->logo) }}" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                            {{ $community->name }}
                                        </td>

                                        <td>
                                            <a href="{{ route('community.edit', ['communityId' => $community->id]) }}" class="text-muted btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- <a href="#" class="text-muted">
                                                <i class="fas fa-trash-alt"></i>
                                            </a> --}}
                                            {{-- <form action="{{ route('community.delete', ['communityId' => $community->id]) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-muted" style="border: none; background: none; cursor: pointer;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form> --}}
                                            <!-- Button Delete menggunakan SweetAlert -->
                                            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $community->id }}" >
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
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
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Sales</h3>
                                    <a href="javascript:void(0);">View Report</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">$18,230.00</span>
                                        <span>Sales Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                            <i class="fas fa-arrow-up"></i> 33.1%
                                        </span>
                                        <span class="text-muted">Since last month</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <canvas id="sales-chart" height="200"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This year
                                    </span>

                                    <span>
                                        <i class="fas fa-square text-gray"></i> Last year
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->


                        <!-- /.d-flex -->
                    </div> --}}
        </div>
    </div>
    <!-- /.col-md-6 -->
</div>

<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
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