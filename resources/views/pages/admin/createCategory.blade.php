@extends('layouts.admin.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Kategori</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="card-body">
                      
                    <div class="form-group">
                      <label for="category">Nama Kategori</label>
                      <input type="text" name="title" class="form-control" id="name" placeholder="Nama Kategori" required>
                    </div>
                    </div>
                    
                    {{-- <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
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

@endsection