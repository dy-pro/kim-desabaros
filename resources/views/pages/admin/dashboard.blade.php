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
              <i class="ion ion-person-add"></i>
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
              <i class="ion ion-bag"></i>
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
              <i class="ion ion-pie-graph"></i>
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
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        {{-- /Jumlah Kegiatan --}}
        
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
      <div class="row">
      
        <div class="col-lg-8">
         
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Produk Terbaru</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column justify-content-between align-items-center border-bottom mb-3">
                <p class="text-success text-xl">
                  <i class="fas fa-store"></i>
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-success"></i> {{ $user }}
                  </span>
                  <span class="text-muted">PENJUAL</span>
                </p>
              </div>
       
            </div>
          </div>
          
        </div>

        <h1> 5 Produk Terbaru</h1>
        <ul>
              @foreach ($latest_products as $latest_product )
              <li>{{ $latest_product->name }} - {{ date('d/m/Y', strtotime($latest_product->created_at)) }}</li>                
              @endforeach
        </ul>
<div> &nbsp; </div>
<br>
<br>
        <h1> 5 Kegiatan Terbaru </h1>
        <ul>
              @foreach ($latest_activities as $latest_activity )
              <li>{{ $latest_activity->name }} - {{ date('d/m/Y', strtotime($latest_activity->created_at)) }}</li>                
              @endforeach
        </ul>
<br>
<br>
        



        <div class="col-lg-4">
         
          <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Kegiatan Terbaru</h3>
              <div class="card-tools">
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-download"></i>
                </a>
                <a href="#" class="btn btn-sm btn-tool">
                  <i class="fas fa-bars"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex flex-column justify-content-between align-items-center border-bottom mb-3">
                <p class="text-success text-xl">
                  <i class="fas fa-store"></i>
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <i class="ion ion-android-arrow-up text-success"></i> {{ $product }}
                  </span>
                  <span class="text-muted">PRODUK</span>
                </p>
              </div>
       
            </div>
          </div>
          
        </div>
        <!-- /.col-md-6 -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
@endsection