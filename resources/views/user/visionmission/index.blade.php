@extends('user.layouts.app')
@section('content')
<div class="kingster-page-title-wrap kingster-style-custom kingster-left-align" style="background-image: url({{ asset('storage/profil/'. $image->image) }});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 505px; padding-bottom: 60px;">
            <h1 class="kingster-page-title" style="font-size: 48px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;">Vision & Mission</h1>
        </div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <!-- Breadcrumb NavXT 6.5.0 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Kingster - College." href="https://demo.goodlayers.com/kingster/homepages/college" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1" />
            </span>
            &gt;
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Vision & Mission</span><meta property="url" content="index.html" /><meta property="position" content="2" />
            </span>
        </div>
    </div>
</div>

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper" style="padding: 40px 0px 30px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                            <div class="clearfix gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 27px; font-weight: 700; letter-spacing: 0px; text-transform: none;">Vision</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-80 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 17px; text-transform: none;">
                                            <p class="text-justify">
                                                {!!$profil->vision!!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                            <div class="clearfix gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 27px; font-weight: 700; letter-spacing: 0px; text-transform: none;">Mission</h3>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-80 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 17px; text-transform: none;">
                                            <p class="text-justify">
                                                {!!$profil->mission!!}
                                            </p>
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
