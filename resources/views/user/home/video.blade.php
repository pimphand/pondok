<div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 300px 0px; z-index: 9;">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3;">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
            style="background-image: url({{asset('user') }}/upload/Blog01.jpg); background-repeat: no-repeat; background-position: top center;"
            data-parallax-speed="0.15"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
            <div class="clearfix gdlr-core-pbf-wrapper-container-inner gdlr-core-item-mglr"
                style="margin: 0px 0px -200px 0px; z-index: 9; width: 100%;">
                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first"
                    id="gdlr-core-column-33303">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                        style="padding-top: 0px; padding-bottom: 15px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    style="padding-bottom: 40px;">
                                    <div class="clearfix gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="font-size: 28px; font-weight: 400; letter-spacing: 0px; color: #222222;">
                                            Video</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js"></div>
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
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-78730"
                style="z-index: 9;">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-top: 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 0px;">

                                <div class="clearfix gdlr-core-event-item-holder">
                                    @foreach ($video as $item)
                                    @if (!$item->video == null)
                                    <div class="clearfix gdlr-core-event-item-list gdlr-core-item-pdlr gdlr-core-style-grid2 gdlr-core-column-20 gdlr-core-with-frame gdlr-core-column-first">
                                        <div
                                            class="gdlr-core-event-item-list-inner"
                                            style="box-shadow: 0 20px 50px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 30px 50px rgba(10, 10, 10, 0.1);"
                                        >
                                            <div class="gdlr-core-event-item-thumbnail">
                                                <a href="#">
                                                    <video width="400" height="250" controls>
                                                        <source src="{{ asset('storage/video') }}/{{ $item->video }}"
                                                            type="video/mp4">
                                                        Browhser anda tidak didukung untuk memutar video ini
                                                    </video>
                                                </a>
                                            </div>
                                            <div class="gdlr-core-frame gdlr-core-skin-e-background gdlr-core-js" data-sync-height="event-item-1">
                                                <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-start-time"><span class="gdlr-core-tail">{{ Date::parse($item->created_at)->format('j F Y') }}</span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title" style="text-transform: uppercase;">
                                                        <a href="#">{{$item->name}}</a>
                                                    </h3>
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
                                                <span class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-start-time"><span class="gdlr-core-tail">{{ Date::parse($item->created_at)->format('j F Y') }}</span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title" style="text-transform: uppercase;">
                                                        <a href="#">{{$item->name}}</a>
                                                    </h3>
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


