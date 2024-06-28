@extends('layouts.admin.admin')

@section('title', 'Buat Kegiatan')

@section('content')
<style>
    .d-flex{
        gap:20px;
    }
</style>
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
                    {{ $errors->any() }}
                    @foreach ( $errors->all() as $error )
                        {{ $error }}
                    @endforeach
                    <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Kegiatan</label>
                                <input name="name" class="form-control" id="name" placeholder="Masukkan nama kegiatan" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi kegiatan"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Penyelenggara</label>
                                <select class="form-control select2" style="width: 100%;" name="id_community">
                                    <option value="" disabled selected>Pilih penyelenggara</option>
                                    @foreach($communities as $community)
                                        <option value="{{ $community->id }}">{{ $community->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between my-4">
                                <!-- Fieldset Tanggal dan Waktu Mulai -->
                                <fieldset class="border p-4 flex-fill">
                                    <legend class="w-auto"><h6>Tanggal dan Waktu Mulai</h6></legend>
                                    <div class="form-col">
                                        <div class="form-group ">
                                            <label for="eventStartDate">Tanggal Mulai</label>
                                            <input type="date" name="eventStartDate" class="form-control" id="eventStartDate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStartTime">Waktu Mulai</label>
                                            <input type="time" name="eventStartTime" class="form-control" id="eventStartTime" required>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Fieldset Tanggal dan Waktu Berakhir -->
                                <fieldset class="border p-4 flex-fill">
                                    <legend class="w-auto"><h6>Tanggal dan Waktu Berakhir</h6></legend>
                                    <div class="form-col">
                                        <div class="form-group">
                                            <label for="eventEndDate">Tanggal Berakhir</label>
                                            <input type="date" name="eventEndDate" class="form-control" id="eventEndDate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventEndTime">Waktu Berakhir</label>
                                            <input type="time"  name="eventEndTime" class="form-control" id="eventEndTime" required>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Poster Kegiatan (Max 1MB, PNG dan JPG)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
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

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>    
    //Initialize Select2 Elements
    $('.select2').select2()

    //Code untuk mengubah label field logo yang akan diunggah
    $(document).ready(function () {
        // Ketika input file berubah (file dipilih)
        $('input[type="file"]').on('change', function() {
            // Ambil file yang dipilih
            var fileName = $(this).val().split('\\').pop(); 
            // Update label custom-file-label dengan nama file yang dipilih
            $(this).next('.custom-file-label').html(fileName);
        });
    });
</script>

@endsection
