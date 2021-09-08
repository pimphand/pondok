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
                    <h6 class="page-title">Pendaftaran Siswa</h6>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">TK</h5>
                            <h4 class="fw-medium font-size-18">Pendaftar : 10{{ $count['tk'] }}</h4>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('tk.index') }}" class="text-white-50">
                                <div class="float-end">
                                    <i class="mdi mdi-arrow-right h5"></i>
                                </div>

                                <p class="text-white-50 mb-0 mt-1">Detail Pendaftar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">MI</h5>
                            <h4 class="fw-medium font-size-18">Pendaftar : {{ $count['mi'] }}</h4>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('mi.index') }}" class="text-white-50">
                                <div class="float-end">
                                    <i class="mdi mdi-arrow-right h5"></i>
                                </div>

                                <p class="text-white-50 mb-0 mt-1">Detail Pendaftar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/03.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">SMP</h5>
                            <h4 class="fw-medium font-size-18">Pendaftar : {{ $count['smp'] }}</h4>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('smp.index') }}" class="text-white-50">
                                <div class="float-end">
                                    <i class="mdi mdi-arrow-right h5"></i>
                                </div>

                                <p class="text-white-50 mb-0 mt-1">Detail Pendaftar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-start mini-stat-img me-4">
                                <img src="assets/images/services-icon/04.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase text-white-50">SMA</h5>
                            <h4 class="fw-medium font-size-18">Pendaftar : {{ $count['sma'] }} </h4>
                        </div>
                        <div class="pt-2">
                            <a href="{{ route('sma.index') }}" class="text-white-50">
                                <div class="float-end">
                                    <i class="mdi mdi-arrow-right h5"></i>
                                </div>

                                <p class="text-white-50 mb-0 mt-1">Detail Pendaftar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>


@endsection