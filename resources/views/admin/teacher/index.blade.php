@extends('admin.layouts.app')

@section('css')
<!-- DataTables -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css">
<link href="{{ asset('admin') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css">

<!-- Responsive datatable examples -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" type="text/css">
@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ asset('admin') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ asset('admin') }}/assets/js/pages/datatables.init.js"></script>
<!--tinymce js-->
<script src="{{ asset('admin') }}/assets/libs/tinymce/tinymce.min.js"></script>

<!-- init js -->
<script src="{{ asset('admin') }}/assets/js/pages/form-editor.init.js"></script>
@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Guru</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Guru</h4><br>
                        <a href="/teacher/create" class="btn btn-info btn-sm pull-right" data-bs-toggle="modal"
                            data-bs-target="#CreateAdd"><i class="fas fa-plus-square">Tambah Data</i></a>
                        <hr>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Nama Lengkap</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Mengajar</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center">{{$item->fullname}}</td>
                                    <td class="text-center"><img src="{{ asset('storage/teacher') }}/{{ $item->image }}"
                                            width="150px"></td>
                                    <td class="text-center">{{$item->teach}}</td>
                                    <td class="text-center">
                                        <form action="{{route('teacher.destroy',['teacher' => $item->id])}}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#UpdateNews{{$item->id}}">Edit</button>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    @include('admin.teacher.modal')
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>


<div class="modal fade" id="CreateAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Guru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 mb-12">
                        <label class="form-label">Nama</label>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <div class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-12">
                        <label class="form-label">Nama Lengkap</label>
                        <div>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter FullName">
                            <div class="text-danger">
                                @error('fullname')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-12">
                        <label class="form-label">Gambar</label>
                        <div>
                            <input type="file" name="image" class="form-control" placeholder="Enter File"
                                accept="imagejpg/,image/jpeg">
                            <div class="text-danger">
                                @error('image')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-12">
                        <label class="form-label">Mengajar</label>
                        <div>
                            <input type="text" name="teach" class="form-control" placeholder="Matematika">
                            <div class="text-danger">
                                @error('teach')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
