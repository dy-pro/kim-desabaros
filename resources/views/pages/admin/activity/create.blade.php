@extends('layouts.admin.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Kegiatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Kegiatan</label>
                                <input name="name" class="form-control" id="name" placeholder="Masukkan nama kegiatan">
                            </div>
                            <div class="form-group">
                                <label for="address">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi kegiatan"></textarea>
                            </div>

                            {{-- <!-- Date and time -->
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div> --}}

                    
                            <div class="form-group">
                                <label for="reservationdate">Tanggal Selesai</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Time picker:</label>
              
                                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Poster Kegiatan (Max 1MB, PNG dan JPG)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" accept=".png, .jpg, .jpeg">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                    </div>
                                    {{-- <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div> --}}
                                </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

<script type="text/javascript">
    // $(function () {
    //     $('#datetimepicker1').datetimepicker({
    //         icons: {
    //             time: 'fa fa-clock',
    //             date: 'fa fa-calendar',
    //             up: 'fa fa-chevron-up',
    //             down: 'fa fa-chevron-down',
    //             previous: 'fa fa-chevron-left',
    //             next: 'fa fa-chevron-right',
    //             today: 'fa fa-sun',
    //             clear: 'fa fa-trash',
    //             close: 'fa fa-times'
    //         },
    //         format: 'YYYY-MM-DD HH:mm' // Ubah sesuai dengan format yang Anda butuhkan
    //     });
    // });

    
     //Date and time picker
     $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    
    //Code untuk mengubah label field logo yang akan diunggah
    // $(document).ready(function () {
    //     // Ketika input file berubah (file dipilih)
    //     $('input[type="file"]').on('change', function() {
    //         // Ambil file yang dipilih
    //         var fileName = $(this).val().split('\\').pop(); 
    //         // Update label custom-file-label dengan nama file yang dipilih
    //         $(this).next('.custom-file-label').html(fileName);
    //     });
    // });
</script>

{{-- <script>
$(function () {
    // Initialize date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
});
</script> --}}
@endsection
