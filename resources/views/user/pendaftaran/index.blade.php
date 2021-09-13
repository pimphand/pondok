@extends('user.layouts.app')

@section('css')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
    .whatsapp{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
    }

    .my-whatsapp{
        margin-top:16px;
        color:#FFF;
    }
    </style>
@endsection
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
                        <div class="kingster-single-article-date-day">{{($data->created_at)->format('j')}}</div>
                        <div class="kingster-single-article-date-month">{{($data->created_at)->format('M')}}</div>
                    </div>
                    <div class="kingster-single-article-head-right">
                        <h1 class="kingster-single-article-title">{{$title}}</h1>
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
                                        {!!$data->description!!}
                                    </p>
                                    <p>
                                    <center>
                                        <img
                                            loading="lazy"
                                            class="alignnone size-full wp-image-5422"
                                            src="{{asset('storage/browsur/'.$data->image)}}"
                                            alt=""
                                            width="700"
                                            height="510"
                                        />
                                    </p>
                                        <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-info" href="{{asset('storage/browsur/'.$data->image)}}" target="_blank" download="">
                                            Download Browsure
                                        </a>
                                    </center>
                                    <span class="gdlr-core-space-shortcode" style="margin-top: 30px;"></span>
                                    <div class="clear"></div>
                                        <a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="{{route('pendaftaran')}}" target="_blank">
                                            Silahkan Klik Tombol Untuk Mendaftar
                                        </a>

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
<a href="https://api.whatsapp.com/send?phone=+6287797043975&text=Assalamualaikum Warahmatullahi Wabarakatuh" class="whatsapp" target="_blank">
<i class="fa fa-whatsapp my-whatsapp"></i>
</a>

@endsection
