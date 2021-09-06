@extends('user.layouts.app')

@section('content')
<div class="kingster-page-title-wrap kingster-style-medium kingster-center-align" style="background-image: url({{asset('storage/profil')}}/{{$profil->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr"><h1 class="kingster-page-title">Gallery</h1></div>
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
                            <div class="clearfix gdlr-core-title-item-title-wrap"><h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="text-transform: none;">Galery</h3></div>

                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-grid">
                            <div class="clearfix gdlr-core-gallery-item-holder gdlr-core-js-2" data-layout="fitrows">
                                <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-column-first gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset("user")}}/upload/shutterstock_270733466.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                            <img src="{{asset("user")}}/upload/shutterstock_270733466-700x660.jpg" alt="" width="700" height="660" title="shutterstock_270733466" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset("user")}}/upload/shutterstock_516640027.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                            <img src="{{asset("user")}}/upload/shutterstock_516640027-700x660.jpg" alt="" width="700" height="660" title="shutterstock_516640027" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset("user")}}/upload/shutterstock_734589535.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                            <img src="{{asset("user")}}/upload/shutterstock_734589535-700x660.jpg" alt="" width="700" height="660" title="shutterstock_734589535" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <a class="gdlr-core-lightgallery gdlr-core-js" href="{{asset("user")}}/upload/shutterstock_704277943.jpg" data-lightbox-group="gdlr-core-img-group-1">
                                            <img src="{{asset("user")}}/upload/shutterstock_704277943-700x660.jpg" alt="" width="700" height="660" title="shutterstock_704277943" />
                                            <span class="gdlr-core-image-overlay"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
