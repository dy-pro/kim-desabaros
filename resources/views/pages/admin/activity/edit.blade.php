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
                        <h3 class="card-title">Ubah Kegiatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {{-- {{ $errors->any() }}
                    @foreach ( $errors->all() as $error )
                        {{ $error }}
                    @endforeach --}}
                    <form action="{{ route('activity.update', ['activityId' => $activity->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Kegiatan</label>
                                <input name="name" class="form-control" id="name" value="{{ $activity->name }}" placeholder="Masukkan nama kegiatan">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Masukkan deksripsi kegiatan">{{ $activity->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="location">Lokasi</label>
                                <textarea name="location" id="location" class="form-control" rows="3" placeholder="Masukkan deksripsi kegiatan">{{ $activity->location }}</textarea>
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Penyelenggara</label>
                                <select class="form-control select2" style="width: 100%;" name="id_community">
                                    <option value="" disabled selected>Pilih penyelenggara</option>
                                    @foreach($communities as $community)
                                        <option value="{{ $community->id }}" {{ $activity->id_community == $community->id ? 'selected' : '' }}>{{ $community->name }}</option>
                                    @endforeach
                                </select>
                                <!-- Tombol untuk menambah komunitas baru -->
                                <div class="form-group my-3">
                                    <a href="javascript:void(0);" id="addNewCommunityBtn" style="color: #007bff; text-decoration: underline;">+ Tambah Penyelenggara Baru</a>
                                </div>
                            </div>

                            <!-- Form Tambah Komunitas Baru -->
                            <div id="newCommunityForm" style="display: none;">
                                <h5>Tambah Penyelenggara Baru</h5>
                                <div class="form-group">
                                    <label for="new_community_name">Nama Lembaga/Komunitas</label>
                                    <input type="text" name="new_community_name" class="form-control" id="new_community_name" placeholder="Masukkan nama komunitas baru">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between my-4">
                                <!-- Fieldset Tanggal dan Waktu Mulai -->
                                <fieldset class="border p-4 flex-fill">
                                    <legend class="w-auto"><h6>Tanggal dan Waktu Mulai</h6></legend>
                                    <div class="form-col">
                                        <div class="form-group ">
                                            <label for="eventStartDate">Tanggal Mulai</label>
                                            <input type="date" name="eventStartDate" class="form-control" id="eventStartDate" value="{{ $startDate }}">
                                            @error('eventStartDate')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStartTime">Waktu Mulai</label>
                                            <input type="time" name="eventStartTime" class="form-control" id="eventStartTime" value="{{ $startTime }}">
                                            @error('eventStartTime')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>


                                <!-- Fieldset Tanggal dan Waktu Berakhir -->
                                <fieldset class="border p-4 flex-fill">
                                    <legend class="w-auto"><h6>Tanggal dan Waktu Berakhir</h6></legend>
                                    <div class="form-col">
                                        <div class="form-group">
                                            <label for="eventEndDate">Tanggal Berakhir</label>
                                            <input type="date" name="eventEndDate" class="form-control" id="eventEndDate" value="{{ $endDate }}">
                                            @error('eventEndDate')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="eventEndTime">Waktu Berakhir</label>
                                            <input type="time"  name="eventEndTime" class="form-control" id="eventEndTime" value="{{ $endTime }}">
                                            @error('eventEndTime')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <fieldset class="border p-4 flex-fill">
                                <legend class="w-auto"><h6>Narahubung</h6></legend>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="contact_name">Nama Kontak</label>
                                        <input type="text" name="contact_name" class="form-control" id="contact_name" value="{{ $activity->contact_name }}">
                                        @error('contact_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_phone">Nomor Telpon</label>
                                        <input type="tel" pattern="[0-9]*"  name="contact_phone" class="form-control" id="contact_phone" value="{{ $activity->contact_phone }}">
                                        @error('contact_phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

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
                                @if($activity->image)
                                    <div class="mt-2">
                                        <img src="{{ Storage::url($activity->image) }}" alt="{{ $activity->name }}" class="img-thumbnail" style="width: 100px;">
                                    </div>
                                @endif
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

<script>
    //Script untuk menghandle form input data komunitas baru
    document.addEventListener('DOMContentLoaded', function() {
        var addNewCommunityBtn = document.getElementById('addNewCommunityBtn');
        var newCommunityForm = document.getElementById('newCommunityForm');

        // Event listener untuk tombol tambah komunitas baru
        addNewCommunityBtn.addEventListener('click', function() {
            if (newCommunityForm.style.display === 'none' || newCommunityForm.style.display === '') {
                newCommunityForm.style.display = 'block';
            } else {
                newCommunityForm.style.display = 'none';
            }
        });
    });
</script>

@endsection
