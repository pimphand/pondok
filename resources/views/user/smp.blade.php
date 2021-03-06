@extends('user.layouts.app')

@section('css')
{{-- <link href="{{ asset('style.css') }}" id="app-style" rel="stylesheet" type="text/css"> --}}

<!-- Bootstrap Css -->
<link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
<!-- App Css-->
<link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
@endsection

@section('content')

<div class="kingster-page-title-wrap kingster-style-medium kingster-center-align"
    style="background-image: url({{asset('storage/profil')}}/{{$image->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="p"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <h1 class="kingster-page-title">Pendaftaran</h1>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper" style="padding: 50px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="pt-10 my-10 account-pages">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8">
                                        <div class="overflow-hidden card">
                                            <div class="bg-primary">
                                                <div class="p-4 text-center text-primary">
                                                    <h5 class="text-white font-size-20">Fomulir Pendaftaran</h5>
                                                </div>
                                            </div>
                                            <div class="p-4 card-body">
                                                <div class="p-3 text-center">
                                                    <h5 class="text-center">Masukkan Kata Sandi Anda</h5>
                                                    @if ($message = Session::get('messages'))
                                                    <div class="alert alert-danger alert-dismissible fade show col-12"
                                                        role="alert">
                                                        {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close">
                                                        </button>
                                                    </div>
                                                    @endif
                                                    <form action="{{ route('entersmp') }}" method="get">
                                                        <div class="row">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <input type="text" name="password" class="form-control"
                                                                    id="useremail" placeholder="Masukan Password">
                                                            </div>
                                                            <div class="mb-3 col-12">
                                                                <button type="submit"
                                                                    class="btn btn-info btn-lg w-100 waves-effect waves-light">Masuk</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
