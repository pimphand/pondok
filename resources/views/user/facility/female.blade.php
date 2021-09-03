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
                            <div class="clearfix gdlr-core-title-item-title-wrap"><h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none;">Horizontal Scrolling</h3></div>
                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">Hover With Center Caption</span>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr">
                            <div class="gdlr-core-sly-slider gdlr-core-js-2">
                                <ul class="slides">
                                    <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                        <div class="gdlr-core-media-image" style="height: 500px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('user')}}/upload/shutterstock_160526219.jpg" data-lightbox-group="gdlr-core-img-group-3">
                                                <img src="{{asset('user')}}/upload/shutterstock_160526219.jpg" alt="" width="1280" height="853" title="shutterstock_160526219" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                        <div class="gdlr-core-media-image" style="height: 500px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('user')}}/upload/shutterstock_106223549.jpg" data-lightbox-group="gdlr-core-img-group-3">
                                                <img src="{{asset('user')}}/upload/shutterstock_106223549.jpg" alt="" width="1280" height="919" title="shutterstock_106223549" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                        <div class="gdlr-core-media-image" style="height: 500px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('user')}}/upload/shutterstock_294489926.jpg" data-lightbox-group="gdlr-core-img-group-3">
                                                <img src="{{asset('user')}}/upload/shutterstock_294489926.jpg" alt="" width="1800" height="1200" title="shutterstock_294489926" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                        <div class="gdlr-core-media-image" style="height: 500px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('user')}}/upload/shutterstock_481869205.jpg" data-lightbox-group="gdlr-core-img-group-3">
                                                <img src="{{asset('user')}}/upload/shutterstock_481869205.jpg" alt="" width="2000" height="1013" title="shutterstock_481869205" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="gdlr-core-gallery-list gdlr-core-item-mglr">
                                        <div class="gdlr-core-media-image" style="height: 500px;">
                                            <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset('user')}}/upload/shutterstock_734589535.jpg" data-lightbox-group="gdlr-core-img-group-3">
                                                <img src="{{asset('user')}}/upload/shutterstock_734589535.jpg" alt="" width="2000" height="1335" title="shutterstock_734589535" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                            </a>
                                        </div>
                                    </li>
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
                            <div class="clearfix gdlr-core-title-item-title-wrap"><h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none;">Gallery Plain Carousel</h3></div>
                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">Hover With Left Title & Caption</span>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr">
                            <div class="gdlr-core-flexslider flexslider gdlr-core-js-2" data-type="slider" data-effect="default" data-nav="navigation">
                                <ul class="slides">
                                    <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a
                                                class="gdlr-core-lightgallery gdlr-core-js"
                                                href="{{asset('user')}}/upload/shutterstock_218235004.jpg"
                                                data-sub-html="Studying"
                                                data-lightbox-group="gdlr-core-img-group-4"
                                            >
                                                <img src="{{asset('user')}}/upload/shutterstock_218235004-1500x1000.jpg" alt="" width="1500" height="1000" title="Student" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Student</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Studying</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a
                                                class="gdlr-core-lightgallery gdlr-core-js"
                                                href="{{asset('user')}}/upload/shutterstock_381527992.jpg"
                                                data-sub-html="Subject"
                                                data-lightbox-group="gdlr-core-img-group-4"
                                            >
                                                <img src="{{asset('user')}}/upload/shutterstock_381527992-1500x1000.jpg" alt="" width="1500" height="1000" title="Mathematic" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Mathematic</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Subject</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a
                                                class="gdlr-core-lightgallery gdlr-core-js"
                                                href="{{asset('user')}}/upload/shutterstock_450689383.jpg"
                                                data-sub-html="Women"
                                                data-lightbox-group="gdlr-core-img-group-4"
                                            >
                                                <img src="{{asset('user')}}/upload/shutterstock_450689383-1500x1000.jpg" alt="" width="1500" height="1000" title="Portrait" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Portrait</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Women</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                            <a
                                                class="gdlr-core-lightgallery gdlr-core-js"
                                                href="{{asset('user')}}/upload/shutterstock_284650220.jpg"
                                                data-sub-html="Group"
                                                data-lightbox-group="gdlr-core-img-group-4"
                                            >
                                                <img src="{{asset('user')}}/upload/shutterstock_284650220-1500x1000.jpg" alt="" width="1500" height="1000" title="Brainstorm" />
                                                <span class="gdlr-core-image-overlay gdlr-core-gallery-image-overlay gdlr-core-left-align">
                                                    <span class="gdlr-core-image-overlay-content">
                                                        <span class="gdlr-core-image-overlay-title gdlr-core-title-font">Brainstorm</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Group</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </li>
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
                            <div class="clearfix gdlr-core-title-item-title-wrap"><h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none;">Gallery Vertical</h3></div>
                            <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">Caption Underneath, Hover With Icon</span>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-stack-image gdlr-core-item-pdlr">
                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2">
                                <div class="gdlr-core-item-list gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a
                                            class="gdlr-core-lightgallery gdlr-core-js"
                                            href="{{asset('user')}}/upload/shutterstock_450689383.jpg"
                                            data-sub-html="Women"
                                            data-lightbox-group="gdlr-core-img-group-6"
                                        >
                                            <img src="{{asset('user')}}/upload/shutterstock_450689383.jpg" alt="" width="2000" height="1000" title="Portrait" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                    <div class="gdlr-core-gallery-caption gdlr-core-info-font">Women</div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a
                                            class="gdlr-core-lightgallery gdlr-core-js"
                                            href="{{asset('user')}}/upload/shutterstock_685407757.jpg"
                                            data-sub-html="University"
                                            data-lightbox-group="gdlr-core-img-group-6"
                                        >
                                            <img src="{{asset('user')}}/upload/shutterstock_685407757.jpg" alt="" width="2000" height="1335" title="Building" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                    <div class="gdlr-core-gallery-caption gdlr-core-info-font">University</div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a
                                            class="gdlr-core-lightgallery gdlr-core-js"
                                            href="{{asset('user')}}/upload/shutterstock_381527992.jpg"
                                            data-sub-html="Subject"
                                            data-lightbox-group="gdlr-core-img-group-6"
                                        >
                                            <img src="{{asset('user')}}/upload/shutterstock_381527992.jpg" alt="" width="2000" height="1333" title="Mathematic" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                    <div class="gdlr-core-gallery-caption gdlr-core-info-font">Subject</div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a
                                            class="gdlr-core-lightgallery gdlr-core-js"
                                            href="{{asset('user')}}/upload/shutterstock_218235004.jpg"
                                            data-sub-html="Studying"
                                            data-lightbox-group="gdlr-core-img-group-6"
                                        >
                                            <img src="{{asset('user')}}/upload/shutterstock_218235004.jpg" alt="" width="2000" height="1334" title="Student" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                    <div class="gdlr-core-gallery-caption gdlr-core-info-font">Studying</div>
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
