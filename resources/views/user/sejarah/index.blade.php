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
                Sejarah</h1>
        </div>
    </div>
</div>

<div class="kingster-content-container kingster-container">
    <div class="kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
        <div class="kingster-sidebar-center kingster-column-60 kingster-line-height">
            <div class="kingster-content-wrap kingster-item-pdlr clearfix">
                <div class="kingster-content-area">
                    <article id="post-1268"
                        class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                        <div class="kingster-single-article clearfix">
                            <div class="kingster-single-article-content">
                                {!! $profil->history !!}
                            </div>
                        </div>
                        <!-- kingster-single-article -->
                    </article>
                    <!-- post-id -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection