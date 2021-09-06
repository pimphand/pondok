@extends('user.layouts.app')

@section('content')
<div class="kingster-page-title-wrap kingster-style-medium kingster-center-align" style="background-image: url({{asset('storage/profil')}}/{{$profil->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div><div class="p"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr"><h1 class="kingster-page-title">Female Facility</h1></div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">

        <div class="gdlr-core-pbf-wrapper" style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr">
                            <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                <ul class="slides">
                                    @foreach ($female as $item)
                                        <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                            <div class="gdlr-core-media-image" style="height: 500px;">
                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="{{ asset('storage/gallery/'. $item->image) }}" data-lightbox-group="gdlr-core-img-group-3">
                                                    <img src="{{ asset('storage/gallery/'. $item->image) }}" alt="" width="1280" height="853" />
                                                    <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                    {{--  --}}
                                </ul>
                            </div>
                            <div class="gdlr-core-sly-scroll"><div class="gdlr-core-sly-scroll-handle"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" style="padding: 120px 20px 70px 20px;" data-skin="White Text">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #0a0a0a;">
                <div
                    class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url({{asset('user')}}/upload/coming-soon.jpg); background-size: cover; background-position: center;"
                    data-parallax-speed="0.2"
                ></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="slider" data-effect="default" data-nav="navigation">
                                <ul class="slides">
                                    @foreach ($female as $item)
                                        <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a
                                                class="gdlr-core-lightgallery gdlr-core-js"
                                                href="{{ asset('storage/gallery/'. $item->image) }}"
                                                data-sub-html="Studying"
                                                data-lightbox-group="gdlr-core-img-group-4">
                                                <img src="{{ asset('storage/gallery/'. $item->image) }}" alt="" width="1500" height="1000" title="Student" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Student</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Studying</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper" style="padding: 120px 20px 0px 20px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-stack-image gdlr-core-item-pdlr">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2">

                                @foreach ($female as $item)
                                <div class="gdlr-core-item-list gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a
                                            class="gdlr-core-lightgallery gdlr-core-js"
                                            href="{{ asset('storage/gallery/'. $item->image) }}"
                                            data-lightbox-group="gdlr-core-img-group-6">
                                            <img src="{{ asset('storage/gallery/'. $item->image) }}" alt="" width="2000" height="1335" title="Building" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
