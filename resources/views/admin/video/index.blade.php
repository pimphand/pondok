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
                        <h6 class="page-title">Video</h6>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/video/create" class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i class="fas fa-plus-square">Add Data</i></a>
                                    <hr>
                                   <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Link Video</th>
                                            <th class="text-center">Video</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td class="text-center">{{$item->name}}</td>
                                            <td class="text-center">{{$item->link}}</td>
                                            <td class="text-center"><img src="{{ asset('storage/video') }}/{{ $item->video }}" width="150px"></td>
                                            <td class="text-center">
                                                <form action="{{route('video.destroy',['video' => $item->id])}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#UpdateNews{{$item->id}}">Update</button>
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            @include('admin.video.modal')
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/video/create" class="btn btn-info btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#CreateAdd"><i class="fas fa-plus-square">Add Data</i></a>
                                    <hr>
                                    <table id="video" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Link Video</th>
                                                <th class="text-center">Video</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center">{{$item->name}}</td>
                                                <td class="text-center">{{$item->link}}</td>
                                                <td class="text-center"><img src="{{ asset('storage/video') }}/{{ $item->video }}" width="150px"></td>
                                                <td class="text-center">
                                                    <form action="{{route('video.destroy',['video' => $item->id])}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#UpdateNews{{$item->id}}">Update</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                @include('admin.video.modal')
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="px-4 py-3 modal-header">
                                    <h5 class="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="p-4 modal-body">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Name</label>
                                                    <input class="form-control" placeholder="Insert Event Name" type="text"
                                                        name="title" id="event-title" required value="" />
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Category</label>
                                                    <select class="form-select" name="category" id="event-category">
                                                        <option selected> --Select-- </option>
                                                        <option value="bg-danger">Danger</option>
                                                        <option value="bg-success">Success</option>
                                                        <option value="bg-primary">Primary</option>
                                                        <option value="bg-info">Info</option>
                                                        <option value="bg-dark">Dark</option>
                                                        <option value="bg-warning">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button type="button" class="btn btn-light me-1" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
        </div>
    </div>


    <div class="modal fade" id="CreateAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Video
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label">Link Video</label>
                            <div>
                                <input type="text" name="link" class="form-control" placeholder="Enter Link Video">
                                <div class="text-danger">
                                    @error('link')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-12">
                            <label class="form-label">Video</label>
                            <div>
                                <input type="file" name="video" class="form-control">
                                <div class="text-danger">
                                    @error('video')
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

