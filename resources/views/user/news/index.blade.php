@extends('user.layouts.app')

@section('content')

<div class="kingster-page-title-wrap kingster-style-medium kingster-left-align">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr">
            <div class="kingster-page-caption">News & Updates</div>
            <h1 class="kingster-page-title">Blog 4 Columns</h1>
        </div>
    </div>
</div>
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-section">
            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-column"
                        style="padding-bottom: 40px;">
                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                            @foreach ($news as $item)
                            <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-15">
                                <div class="gdlr-core-blog-grid">
                                    <div
                                        class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                        <a href="{{ route('detail.news', $item->slug) }}">
                                            <img src="{{ asset('storage/news/'. $item->image) }}" alt="" width="550"
                                                height="500" title="{{ $item->slug }}" />
                                            <div class="gdlr-core-sticky-banner gdlr-core-title-font"><i
                                                    class="fa fa-bolt"></i>Sticky Post</div>
                                        </a>
                                    </div>
                                    <div class="gdlr-core-blog-grid-content-wrap">
                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                            <span
                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                    href="{{ route('detail.news', $item->slug) }}">{{ $item->created_at }}</a></span>
                                        </div>
                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                            style="font-size: 23px; font-weight: 700; letter-spacing: 0px;">
                                            <a href="{{ route('detail.news', $item->slug) }}">{{ $item->name }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div
                            class="gdlr-core-pagination gdlr-core-style-circle gdlr-core-left-align gdlr-core-item-pdlr">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection