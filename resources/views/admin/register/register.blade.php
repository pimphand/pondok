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
                    <h6 class="page-title">Pendaftar</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Pendaftar {{ $edu }}</h4><br>
                        <a href="/news/create" class="btn btn-info btn-sm pull-right" data-bs-toggle="modal"
                            data-bs-target="#CreateAdd"><i class="fas fa-plus-square"> Tambah Data</i></a>
                        <hr>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Isi</th>
                                    <th class="text-center">Penulis</th>
                                    <th class="text-center">Dibuat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center">
                                        <form action="{{route('news.destroy',['news' => $item->id])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#UpdateNews{{$item->id}}">Edit</button>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    @include('admin.news.modal')
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

@endsection