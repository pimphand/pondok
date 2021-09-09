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
            <h1 class="kingster-page-title">Kalender Akademik</h1>
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
                        <div class="clearfix gdlr-core-portfolio-item gdlr-core-item-pdb gdlr-core-portfolio-item-style-grid" style="padding-bottom: 50px;">
                            <div class="clearfix gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container" data-layout="masonry">
                                @foreach ($data as $item)
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-30 ">
                                    <span class="gdlr-core-portfolio-title gdlr-core-title-font" style="font-size: 18px; font-weight: 600; letter-spacing: 1px; text-transform: none;">
                                        <center><a href="#">{{$item->name}}</a></center>
                                    </span>
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('storage/calenders/'. $item->image)}}" data-lightbox-group="gdlr-core-img-group-1">
                                                    <img src="{{asset('storage/calenders/'. $item->image)}}" alt="" width="900" height="650" title="shutterstock_170053697" />
                                                    <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 fa fa-search"></i></span>
                                                </a>
                                            </div>
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
