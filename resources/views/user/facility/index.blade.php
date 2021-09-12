@extends('user.layouts.app')

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
            <h1 class="kingster-page-title">{{ $title ?? "" }}</h1>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">

        @foreach ($data as $items)
            <div class="gdlr-core-pbf-wrapper" style="padding: 100px 20px 30px 20px;">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full">

                        <div class="gdlr-core-pbf-element">
                            <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                style="padding-bottom: 60px;">
                                <div class="clearfix gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="text-transform: none;">{{$items->name}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr">
                                <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                    <ul class="slides">
                                        @foreach ($items->gallery as $g)
                                        <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                            <div class="gdlr-core-media-image" style="height: 300px;">
                                                <a class="gdlr-core-lightgallery gdlr-core-js"
                                                    href="{{ asset('storage/gallery/'. $g->image) }}"
                                                    data-lightbox-group="gdlr-core-img-group-3">
                                                    <img src="{{ asset('storage/gallery/'. $g->image) }}" alt=""
                                                    width="1280" height="853" title="shutterstock_160526219" />
                                                    <span
                                                    class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i
                                                    class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="gdlr-core-sly-scroll">
                                    <div class="gdlr-core-sly-scroll-handle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
