@extends('layouts.admin.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Kegiatan</h3>
                        <div class="card-tools">
                            <a href="/activity_management/createActivity">
                                <button class="btn btn-outline-primary">Tambah Kegiatan</button>
                            </a>
                        </div>
                    </div>

                    <div class="card-body table-responsive">
                        @if (!empty($activities))
                        <table id="example1" class="table table-bordered table-striped dataTable">
                            <thead>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <th>Gambar Poster</th>
                                    <th>Deskripsi</th>
                                    <th>Lokasi</th>
                                    <th>Penyelenggara</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $activities as $activity )
                                    <tr>
                                        <td>{{ $activity->name }}</td>
                                        <td>
                                            <img src="{{ $activity->image ? Storage::url($activity->image) : asset('AdminLTE/dist/img/default-150x150.png') }}" alt="Product 1" class="img-square img-size-64 mr-2">
                                        </td>
                                        <td>
                                            {{ $activity->description }}
                                        </td>

                                        <td>
                                            {{ $activity->location }}
                                        </td>

                                        <td>
                                            {{ $activity->community ? $activity->community->name : 'Tidak Ada' }}
                                        </td>
                                        <td>
                                            {{ $activity->datetime_start }}
                                        </td>
                                        <td>
                                            {{ $activity->datetime_end }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('activity.edit', ['activityId' => $activity->id]) }}" class="text-primary mr-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- Button Delete menggunakan SweetAlert -->
                                                <button type="button" class="btn text-danger btn-delete border-0" data-id="{{ $activity->id }}" >
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
        // Event listener untuk tombol delete
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                // Dapatkan ID Aktivitas dari atribut data-id
                const activityId = this.getAttribute('data-id');

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
                        form.action = `/activity_management/${activityId}/deleteActivity`;

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

    $(document).ready(function() {
    $('#example1').DataTable({
        "language": {
            "lengthMenu": "_MENU_ Filter",
            search: 'Cari Kegiatan : '

        }
    });
});
</script>
@endsection