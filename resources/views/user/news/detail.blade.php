@extends('user.layouts.app')

@section('content')
<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="kingster-blog-title-wrap kingster-style-custom kingster-feature-image" style="background-image: url({{asset('storage/profil')}}/{{$image->image}});">
        <div class="kingster-header-transparent-substitute"></div>
        <div class="kingster-blog-title-overlay" style="opacity: 0.01;"></div>
        <div class="kingster-blog-title-bottom-overlay"></div>
        <div class="kingster-blog-title-container kingster-container">
            <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px; padding-bottom: 80px;">
                <header class="clearfix kingster-single-article-head">
                    <div class="kingster-single-article-date-wrapper post-date updated">
                        <div class="kingster-single-article-date-day">{{($news->created_at)->format('j')}}</div>
                        <div class="kingster-single-article-date-month">{{($news->created_at)->format('M')}}</div>
                    </div>
                    <div class="kingster-single-article-head-right">
                        <h1 class="kingster-single-article-title">{{$news->name}}</h1>
                        <div class="kingster-blog-info-wrapper">
                            <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author">
                                <span class="kingster-head">By</span><span class="fn"><a href="#" title="Posts by James Smith" rel="author">{{$news->user->name}}</a></span>
                            </div>
                            <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-category">
                                <a href="javascript:void(0)" rel="tag">Berita</a>
                            </div>
                            <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-comment-number">
                                <span class="kingster-head"><i class="fa fa-eye"></i></span>{{$news->views}}
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
    <div class="kingster-content-container kingster-container">
        <div class="clearfix kingster-sidebar-wrap kingster-line-height-0 kingster-sidebar-style-none">
            <div class="kingster-sidebar-center kingster-column-60 kingster-line-height">
                <div class="clearfix kingster-content-wrap kingster-item-pdlr">
                    <div class="kingster-content-area">
                        <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                            <div class="clearfix kingster-single-article">
                                <div class="kingster-single-article-content">
                                    <p>
                                        <img
                                            loading="lazy"
                                            class="alignnone size-full wp-image-5422"
                                            src="{{asset('storage/news/'.$news->image)}}"
                                            alt=""
                                            width="1700"
                                            height="810"
                                        />
                                    </p>
                                    <span class="gdlr-core-space-shortcode" style="margin-top: 30px;"></span>
                                    <h6>{{$news->name}}</h6>
                                    <p>
                                        {!!$news->description!!}
                                    </p>
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
</div>

@endsection
