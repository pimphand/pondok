@extends('user.layouts.app')

@section('content')
<div class="kingster-page-title-wrap kingster-style-custom kingster-left-align"
    style="background-image: url({{asset('storage/profil')}}/{{$image->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 460px; padding-bottom: 60px;">
            <h1 class="kingster-page-title"
                style="font-size: 48px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;">
                Guru</h1>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper" style="padding: 50px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">

                        <div class="clearfix gdlr-core-portfolio-item gdlr-core-item-pdb gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">
                            <div class="clearfix gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container" data-layout="masonry">
                                @foreach ($teacher as $item)
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-12 ">
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <img src="{{ asset('storage/teacher/'.$item->image) }}" alt="" width="700" height="450" title="pexels-photo" />
                                                <span class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-portfolio-title gdlr-core-title-font" style="font-size: 18px; font-weight: 400; letter-spacing: 1px; text-transform: none;">
                                                            <a href="#">{{$item->fullname}}</a>
                                                        </span>
                                                        <span class="gdlr-core-portfolio-icon-wrap">
                                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{ asset('storage/teacher/'.$item->image) }}" data-lightbox-group="gdlr-core-img-group-1">
                                                                <i class="gdlr-core-portfolio-icon arrow_expand"></i>
                                                            </a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                <a href="#">{{$item->fullname}}</a>
                                            </h3>
                                            <span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal;">
                                                <a href="#" rel="tag">{{$item->name}}</a> <span class="gdlr-core-sep">/</span> <a href="#" rel="tag">{{$item->teach}}</a>
                                            </span>
                                        </div>
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
