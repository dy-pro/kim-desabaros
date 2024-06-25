@extends('layouts.admin.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Pengguna</h3>
                                    <div class="card-tools">
                                        <a href="/user_management/createUser"><button class="btn btn-outline-primary">Tambah Pengguna</button>
                                    </div>
                                </div>


                                <div class="card-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No Handphone</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="{{ asset('AdminLTE/dist/img/default-150x150.png')}}"
                                                        alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Margaret
                                                </td>
                                                
                                                <td>Kota Bandung, Jawa Barat</td>
                                                <td>
                                                   0816342836
                                                </td>
                                                <td>
                                                    Penjual
                                                </td>
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
@endsection