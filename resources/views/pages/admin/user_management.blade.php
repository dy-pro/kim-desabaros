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
                                        <a href="/user_management/createUser"><button class="btn btn-outline-primary">Tambah Pengguna</a>
                                    </div>
                                </div>


                                <div class="card-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped dataTable dataTable">
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
                                            @foreach ( $users as $user)

                                            <tr>
                                                <td>{{ $loop->iteration++ }}</td>
                                                <td>
                                                    <img src="{{ asset('users/'.$user->image)}}"
                                                    alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    {{ $user->name }}
                                                </td>
                                                
                                                
                                                
                                                <td>
                                                    {{ $user->address }}
                                                </td>
                                                <td>
                                                    {{ $user->whatsapp }}
                                                </td>

                                                <td>
                                                    {{ $user->role }}
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="{{route('user.edit', $user->id)}}" class="text-primary mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{route ('user.destroy', $user->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" class="btn text-danger border-0">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach   
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
                $(document).ready(function () {


                });
                </script>
@endsection