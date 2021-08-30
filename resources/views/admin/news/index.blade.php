@extends('admin.layouts.app')

@section('css')
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
@endsection
@section('script')
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">News</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table News</h4><br>
                            <a href="/news/create" class="btn btn-danger btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i class="fas fa-plus-square">Add Data</i></a>
                            <hr>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($news as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td class="text-center"><img src="{{ asset('storage/news') }}/{{ $item->image }}" width="150px"></td>
                                        <td>{{$item->news_categories}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            <form action="{{route('news.destroy',['news' => $item->id])}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Update{{$item->id}}" >Update</button>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                        @include('admin.berita.modal')
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Catagory
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
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
                        <div class="mb-12">
                            <label class="form-label">Categories</label>
                            <div>
                                <select name="categories" class="form-control">
                                    <option value="">--Select Categories--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-12">
                            <label class="form-label">Description</label>
                            <div>
                                <input type="text" name="description" class="form-control" placeholder="Enter Description">
                                <div class="text-danger">
                                    @error('description')
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

