@extends('admin.layouts.app')

@section('css')
<!-- DataTables -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('admin') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

<!-- Responsive datatable examples -->
<link href="{{ asset('admin') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h6 class="page-title">Facility</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table Facility</h4><br>
                        <a class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i
                                class="fas fa-plus-circle"></i> Add
                            Data </a>
                        <hr>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->building_id}}</td>
                                    <td><img src="{{asset('storage/gallery')}}/{{$item->name}}" width="600px"></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#Update{{$item->id}}">Update</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $item->id }}">
                                            Delete
                                        </button>
                                        @include('admin.facility.modal')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

<!-- Create -->
<div class="modal fade" id="CreateAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Facility
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('calender.store')}}" method="POST" class="outer-repeater" enctype="multipart/form-data">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            <div class="mb-3">
                                <label class="form-label" for="formname">Name</label>
                                <input type="text" class="form-control" name="name" id="formname" placeholder="Enter Name">
                                <div class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 inner-repeater">
                                <div data-repeater-list="inner-group" class="mb-3 inner">
                                    <label class="form-label">Image</label>
                                    <div data-repeater-item class="mb-3 inner row">
                                        <div class="col-md-7 col-sm-8">
                                            <input type="file" name="image" class="inner form-control" placeholder="Enter your phone no..."/>
                                        </div>
                                        <div class="col-md-3 col-sm-2">
                                            <div class="d-grid">
                                                <input data-repeater-create type="button" class="btn btn-success inner" value="Add Image"/>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="d-grid">
                                                <input data-repeater-delete type="button" class="mt-2 btn btn-primary inner mt-sm-0" value="Delete"/>
                                            </div>
                                        </div>
                                        <div class="text-danger">
                                            @error('image')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

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

 <!-- form repeater js -->
 <script src="{{ asset('admin') }}/assets/libs/jquery.repeater/jquery.repeater.min.js"></script>

 <script src="{{ asset('admin') }}/assets/js/pages/form-repeater.int.js"></script>

@endsection
