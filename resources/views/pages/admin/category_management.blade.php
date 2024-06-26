@extends('layouts.admin.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Kategori</h3>
                                    <div class="card-tools">
                                        <a href="/category_management/createCategory"><button class="btn btn-outline-primary">Tambah Kategori</button></a>
                                    </div>
                                </div>


                                <div class="card-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                
                                            
                                            <tr>
                                                
                                                <td>{{ $loop->iteration++ }}</td>
                                                <td>
                                                    {{ $category->title }}
                                                </td>
                                                
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                    <a href="{{route('category.edit', $category->id) }}" class="text-primary mr-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{route ('category.destroy', $category->id)}}" method="POST">
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
@endsection