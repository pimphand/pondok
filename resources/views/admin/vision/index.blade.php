@extends('admin.layouts.app')

@section('script')
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
                    <h6 class="page-title">Vision Mision</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Vision Mision</h4>
                        <form action="{{route('vision.update', ['vision'=>$data->id])}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="float-end">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Update
                                    </button>
                                </div>
                            </div>
                            <br><br>
                            <div class="mb-3">
                                <label class="form-label">Vision</label>
                                <div>
                                    <textarea type="text" id="elm1" name="vision" class="form-control" required
                                        data-parsley-min="6" placeholder="Enter Vision">{{$data->vision}}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mission</label>
                                <div>
                                    <textarea type="text" id="elm2" name="mission" class="form-control" required
                                        data-parsley-min="6" placeholder="Enter Mision">{{$data->mission}}</textarea>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div>
@endsection