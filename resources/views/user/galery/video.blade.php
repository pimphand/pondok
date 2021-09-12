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
            <h1 class="kingster-page-title">Video</h1>
        </div>
    </div>
</div>

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper gdlr-core-hide-in-tablet-mobile" style="padding: 50px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">

                        <div class="clearfix gdlr-core-portfolio-item gdlr-core-item-pdb gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">
                            <div class="clearfix gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container" data-layout="masonry">
                                @foreach ($data as $item)
                                @if (!$item->video == null)
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-15 ">
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <video width="300" height="195" controls>
                                                    <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                                        type="video/mp4">
                                                    Browhser anda tidak didukung untuk memutar video ini
                                                </video>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                <a href="#">{{$item->name}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-15 ">
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <iframe width="800" height="550"
                                            src="https://www.youtube.com/embed/{{ $item->link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                <a href="#">{{$item->name}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper gdlr-core-hide-in-desktop" style="padding: 50px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">

                        <div class="clearfix gdlr-core-portfolio-item gdlr-core-item-pdb gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px;">
                            <div class="clearfix gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container" data-layout="masonry">
                                @foreach ($data as $item)
                                @if (!$item->video == null)
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-15 ">
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <video width="340" height="230" controls>
                                                    <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                                        type="video/mp4">
                                                    Browhser anda tidak didukung untuk memutar video ini
                                                </video>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                <a href="#">{{$item->name}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="gdlr-core-item-list gdlr-core-item-pdlr class3 gdlr-core-column-15 ">
                                    <div class="gdlr-core-portfolio-grid gdlr-core-left-align gdlr-core-style-normal">
                                        <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-icon">
                                            <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                <iframe width="800" height="550"
                                            src="https://www.youtube.com/embed/{{ $item->link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                            <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 600; letter-spacing: 0px; text-transform: none;">
                                                <a href="#">{{$item->name}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                @endif
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
