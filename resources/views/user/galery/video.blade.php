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
        <div class="gdlr-core-pbf-wrapper" style="padding: 100px 20px 30px 20px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                            style="padding-bottom: 60px;">
                            <div class="clearfix gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                    style="text-transform: none;">Galery</h3>
                            </div>

                        </div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div
                            class="clearfix gdlr-core-gallery-item gdlr-core-item-pdb gdlr-core-gallery-item-style-grid" >
                            <div class="clearfix gdlr-core-gallery-item-holder gdlr-core-js-2" data-layout="fitrows">
                                @foreach ($data as $item)
                                @if (!$item->video == null)
                                <div
                                    class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <video width="600px" height="400px" controls>
                                            <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                                type="video/mp4">
                                            Browhser anda tidak didukung untuk memutar video ini
                                        </video>
                                    </div>
                                </div>
                                @else
                                <div
                                    class="gdlr-core-item-list gdlr-core-gallery-column gdlr-core-column-15 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                        <iframe width="600px" height="400px"
                                            src="https://www.youtube.com/embed/{{ $item->link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
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
<div class="gdlr-core-pbf-wrapper" style="margin-top: -258px; padding: 0px 0px 100px 0px;">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-6 gdlr-core-column-first" id="gdlr-core-column-78730" >
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-top: 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 0px;">
                                <div class="clearfix gdlr-core-event-item-holder">
                                    @foreach ($data as $item)
                                    @if (!$item->video == null)
                                    <div class="clearfix gdlr-core-event-item-list gdlr-core-item-pdlr gdlr-core-style-grid2 gdlr-core-column-20 gdlr-core-with-frame gdlr-core-column-first">
                                        <div
                                            class="gdlr-core-event-item-list-inner"
                                            style="box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1);"
                                        >
                                            <div class="gdlr-core-event-item-thumbnail">
                                                <a href="#">
                                                    <video width="700" height="450" controls>
                                                        <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                                            type="video/mp4">
                                                        Browhser anda tidak didukung untuk memutar video ini
                                                    </video>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-frame gdlr-core-skin-e-background gdlr-core-js" data-sync-height="event-item-1">
                                                <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-start-time"><span class="gdlr-core-tail">7 January 2020</span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title" style="text-transform: uppercase;">
                                                        <a href="#">Reunion Event : Kingster’s Alumni Golf Tour</a>
                                                    </h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time">
                                                            <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><span class="gdlr-core-tail">7:00 am - 11:30 pm</span>
                                                        </span>
                                                        <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location">
                                                            <span class="gdlr-core-head"><i class="icon_pin_alt"></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="clearfix gdlr-core-event-item-list gdlr-core-item-pdlr gdlr-core-style-grid2 gdlr-core-column-20 gdlr-core-with-frame">
                                        <div
                                            class="gdlr-core-event-item-list-inner"
                                            style="box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1);"
                                        >
                                            <div class="gdlr-core-event-item-thumbnail">
                                                <a href="#">
                                                    <iframe width="700" height="450"
                                            src="https://www.youtube.com/embed/{{ $item->link }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-frame gdlr-core-skin-e-background gdlr-core-js" data-sync-height="event-item-1">
                                                <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-start-time"><span class="gdlr-core-tail">1 January 2020</span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title" style="text-transform: uppercase;">
                                                        <a href="#">Kingster’s Alumni Hot Air Ballon Trip in Turkey</a>
                                                    </h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time">
                                                            <span class="gdlr-core-head"><i class="icon_clock_alt"></i></span><span class="gdlr-core-tail">10:00 am - 4:30 pm</span>
                                                        </span>
                                                        <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-location">
                                                            <span class="gdlr-core-head"><i class="icon_pin_alt"></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                        </span>
                                                    </div>
                                                </div>
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
</div>

@endsection
