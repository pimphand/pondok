@extends('admin.layouts.app')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('admin') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
                        <h6 class="page-title">Aktifitas Pria</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Aktifitas Pria</h4><br>
                            <a href="/man/create" class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i class="fas fa-plus-square">Add Data</i></a>
                            <hr>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($activity as $item)
                                    <tr>
                                        <td class="text-center">{{$item->name}}</td>
                                        <td class="text-center">{!!$item->description!!}</td>
                                        <td class="text-center"><img src="{{ asset('storage/activity') }}/{{ $item->image }}" width="150px"></td>
                                        <td class="text-center">
                                            <form action="{{route('man.destroy',['man' => $item->id])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#UpdateMan{{$item->id}}" >Update</button>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                        @include('admin.activity.modal')

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


    <div class="modal fade" id="CreateAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Teacher
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('man.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-12">
                            <label class="form-label">Name</label>
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                <div class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-12">
                            <label class="form-label">Deskripai</label>
                            <div>
                                <textarea type="text" id="elm3" name="description" class="form-control" placeholder="Masukkan deskripsi"></textarea>
                                <div class="text-danger">
                                    @error('description')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-12">
                            <label class="form-label">Image</label>
                            <div>
                                <input type="file" name="image" class="form-control" placeholder="Enter File" accept="png/jpg/jpeg">
                                <div class="text-danger">
                                    @error('image')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="hostel" value="1" class="btn btn-primary">Save</button>
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

