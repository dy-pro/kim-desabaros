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
                        <a href="/community_management/create">
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
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ( $communities as $community )
                                    <tr>
                                        <td>
                                            <img src="{{ asset('AdminLTE/dist/img/default-150x150.png') }}" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                            {{ $community->name }}
                                        </td>

                                        <td>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="text-muted">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
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

@endsection