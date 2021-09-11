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
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Admin</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tabel Admin</h4><br>
                        <a class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i
                                class="fas fa-plus-circle"></i> Tambah
                            Data </a>
                        <hr>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Ditambahkan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#Update{{$item->id}}">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $item->id }}">
                                            Hapus
                                        </button>
                                        </form>
                                    </td>
                                    @include('admin.user.modal')
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Admin
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-12">
                        <label class="form-label">Name</label>
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <div class="text-danger" value="{{ old('name') }}">
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Email</label>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Enter Name"
                                value="{{ old('email') }}">
                            <div class="text-danger">
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Kata Sandi</label>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Enter Name"
                                value="{{ old('password') }}">
                            <div class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-12">
                        <label class="form-label">Konfirmasi Kata Sandi</label>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control"
                                value="{{ old('password_confirmation') }}" placeholder="Enter Name">
                            <div class="text-danger">
                                @error('password_confirmation')
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
@section('script')
<!-- Required datatable js -->
<script src="{{ asset('admin') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{ asset('admin') }}/assets/js/pages/datatables.init.js"></script>
@endsection