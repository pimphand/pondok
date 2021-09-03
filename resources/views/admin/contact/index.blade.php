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
                    <h6 class="page-title">Contact</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>
                        <form action="{{route('contact.update', ['contact'=>$data->id])}}" method="POST" enctype="multipart/form-data">
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
                                <label class="form-label">Address</label>
                                <div>
                                    <input type="text" name="address" class="form-control" required data-parsley-minlength="6" placeholder="Enter Address" value="{{$data->address}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <div>
                                    <input type="text" name="phone" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter Phone" value="{{$data->phone}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div>
                                    <input type="email" name="email" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter Email" value="{{$data->email}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">WhatsApp</label>
                                <div>
                                    <input type="text" name="whatsapp" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter WhatsApp" value="{{$data->whatsapp}}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram</label>
                                <div>
                                    <input type="text" name="instagram" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter Instagram" value="{{$data->instagram}}">
                                </div>
                                <small>Masukkan Link Instagram contoh <b class="text-danger">https://www.instagram.com/nashrus/</b></small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <div>
                                    <input type="text" name="facebook" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter Facebook" value="{{$data->facebook}}">
                                </div>
                                <small>Masukkan Link Facebook contoh <b class="text-danger">https://www.facebook.com/profile.php?id=123333</b></small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Youtube</label>
                                <div>
                                    <input type="text" name="youtube" class="form-control" required ata-parsley-maxlength="6" placeholder="Enter Youtube" value="{{$data->youtube}}">
                                </div>
                                <small>Masukkan Embed Youtube contoh <b class="text-danger">https://www.youtube.com/embed/c74kMCOmP80</b></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div> <!-- container-fluid -->
</div>
@endsection
