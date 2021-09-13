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
                    <h6 class="page-title">{{$title1}}</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$title2}}</h4>
                        <form action="{{route('daftar.update', ['daftar'=>$data->id])}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="float-end">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label class="form-label">Brousure</label>
                                    <div>
                                        <input type="file" name="image" class="form-control" data-parsley-minlength="6"
                                            placeholder="Min 6 chars." accept="image/jpeg, image/jpg">
                                            <div class="text-danger">
                                                @error('image')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        <br>
                                        <img src="{{asset('storage/browsur')}}/{{$data->image}}" width="600">
                                    </div>
                                </div>
                                <div class="mb-3 col-6">
                                    <label class="form-label">Link Pendaftaran</label>
                                    <div>
                                        <input type="text" name="link" class="form-control" value="{{$data->link}}">
                                        <div class="text-danger">
                                            @error('link')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <div>
                                    <textarea type="text" id="elm1" name="description" class="form-control" required
                                        data-parsley-min="6"
                                        placeholder="Enter Description">{{$data->description}}</textarea>
                                    <div class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </div>
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
