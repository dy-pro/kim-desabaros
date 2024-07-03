@extends('layouts.admin.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
       {{-- Jumlah Pengguna --}}
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h1 style="padding-left:10px">{{ $user }}</h1>
              <p>Jumlah Penjual</p>
            </div>
            <div class="icon">
              <i class="fas fa-store"></i>
            </div>
          </div>
        </div>
        {{-- /Jumlah Pengguna --}}

        {{-- Jumlah Produk --}}
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h1 style="padding-left:10px">{{ $product }}</h1>
              <p>Jumlah Produk</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-bag"></i>
            </div>
          </div>
        </div>
        {{-- /Jumlah Produk --}}

        {{-- Jumlah Lembaga Komunitas --}}
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h1>{{ $community }}</h1>

              <p>Jumlah Lembaga/Komunitas</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
          </div>
        </div>
        {{-- /Jumlah Lembaga Komunitas --}}
        
        {{-- Jumlah Kegiatan --}}
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h1>{{ $activity }}</h1>

              <p>Jumlah Kegiatan</p>
            </div>
            <div class="icon">
              <i class="fas fa-calendar"></i>
            </div>
          </div>
        </div>
        {{-- /Jumlah Kegiatan --}} 
      </div>
      <!-- /.row -->

      {{-- PRODUK TERBARU --}}
      <div class="row">
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Produk Terbaru</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Gambar Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Tanggal Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($latest_products as $latest_product)
                    <tr>
                      <td>
                        <img 
                        src="{{ asset('products/' . $latest_product->image) }}"
                     
                        style="width: 50px; height: auto;">
                      </td>
                      <td>
                        <strong>{{ $latest_product->name }}</strong><br>
                          {{ $latest_product->description }}
                      </td>
                      
                      <td>{{ $latest_product->price }}</td>
                      <td>{{ date('d/m/Y', strtotime($latest_product->created_at)) }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="/product_management" class="btn btn-primary d-flex justify-content-center align-items-center">Lihat semua</a>
            </div>
            
            <!-- /.card-footer -->
          </div>
        </div>
      {{-- /PRODUK TERBARU --}}

      {{-- KEGIATAN TERBARU --}}
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Kegiatan Terbaru</h3>
    
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Lokasi</th>
                      <th>Tanggal Mulai</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach  ($latest_activities as $latest_activity )
                    <tr>
                     
                      <td>
                        {{ $latest_activity->name }}
                      </td>
                      <td>
                        {{ $latest_activity->location }}
                      </td>
                      
                      <td>{{ date('d/m/Y', strtotime($latest_activity->created_at)) }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="/activity_management" class="btn btn-primary d-flex justify-content-center align-items-center">Lihat semua</a>
            </div>
            
            <!-- /.card-footer -->
          </div>
        </div>
      {{-- /KEGIATAN TERBARU --}}
    </div>


       
        
        <!-- /.col-md-6 -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
@endsection