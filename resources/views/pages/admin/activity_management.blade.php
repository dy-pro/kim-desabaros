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
                                        <a href="/activity_management/createActivity"><button class="btn btn-outline-primary">Tambah Kegiatan</button></a>
                                    </div>
                                </div>

                                <div class="card-body table-responsive">
                                    <table id="example2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar Poster</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="{{ asset('AdminLTE/dist/img/default-150x150.png')}}"
                                                        alt="Product 1" class="img-circle img-size-32 mr-2">
                                                </td>
                                                <td>Kegiatan ini deselenggarakan oleh</td>
                                                <td>10 November</td>
                                                <td>11 November</td>
                                                <td>
                                                    <a href="#" class="text-primary mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="text-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
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
                $(function () {
                  $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                  $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
              </script>
@endsection