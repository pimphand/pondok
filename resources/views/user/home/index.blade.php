@extends('user.layouts.app')

@section('content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">

        @include('user.home.slider')

        @include('user.home.intro')

        @include('user.home.news')

        @include('user.home.facility')

        @include('user.home.video')



    </div>
</div>
@endsection
@section('css')
<style>
    .img {
        -webkit-filter: blur(10px);
        filter: blur(10px);
    }
</style>
@endsection
