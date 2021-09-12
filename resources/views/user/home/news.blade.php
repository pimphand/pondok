<div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 450px 0px;" id="gdlr-core-wrapper-6">
    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3;">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
            style="background-image: url({{asset('user') }}/upload/Post01.jpg); background-repeat: no-repeat; background-position: top center;"
            data-parallax-speed="0.15"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                    <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align gdlr-core-style-vertical"
                                style="margin-bottom: 50px;">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                    style="border-color: #d1d1d1; height: 100px;"></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                    style="font-size: 15px; font-style: normal; letter-spacing: 1px; text-transform: uppercase; color: #333333;">
                                    Beita Terbaru
                                </span>
                                <div class="clearfix gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 42px; font-weight: 400; letter-spacing: 0px; color: #222222;">
                                        Berita</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-89816">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-top: 240px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-right-align">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper gdlr-core-in-tablet-mobile"
    style="margin: -448px 0px 0px 0px; padding: 0px 0px 90px 0px;" id="gdlr-core-wrapper-7">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-37730"
                style="z-index: 9;">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-item-mglr gdlr-core-item-mgb"
                    style="margin: 0px 0px 0px 0px; padding-top: 50px; padding-bottom: 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="clearfix gdlr-core-blog-item gdlr-core-item-pdb gdlr-core-style-blog-column-with-frame gdlr-core-item-pdlr"
                                style="padding-bottom: 0px;">
                                <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-bullet-style-round3 gdlr-core-color-bullet"
                                    data-type="carousel" data-column="2" data-move="1" data-nav="bullet"
                                    data-nav-parent="gdlr-core-blog-item" data-controls-top-margin="70px">
                                    <ul class="slides">
                                        @foreach ($news as $item)
                                        <li class="gdlr-core-item-mglr">
                                            <div class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                data-sync-height="blog-item">
                                                <div
                                                    class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/news/'. $item->image) }}"
                                                            alt="" width="700" height="450" title="{{$item->slug}}" />
                                                    </a>
                                                </div>
                                                <div
                                                    class="clearfix gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position">
                                                    <div class="clearfix gdlr-core-blog-grid-top-info">
                                                        <span
                                                            class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                            <a href="{{ route('detail.news', $item->slug) }}">{{ Date::parse($item->created_at)->format('j F Y') }}</a>
                                                        </span>
                                                    </div>
                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                        style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                        <a href="{{ route('detail.news', $item->slug) }}">{{ $item->name }}</a>
                                                    </h3>
                                                    <div class="clearfix gdlr-core-blog-content">
                                                        <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text"
                                                            href="{{ route('detail.news', $item->slug) }}">
                                                            Lebih Lengkap<i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
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
        </div>
    </div>
</div>
