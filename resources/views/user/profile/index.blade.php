@extends('user.layouts.app')

@section('content')
<div class="kingster-page-title-wrap kingster-style-custom kingster-left-align" style="background-image: url({{asset('storage/profil')}}/{{$profil->image}});">
    <div class="kingster-header-transparent-substitute"></div>
    <div class="kingster-page-title-overlay"></div>
    <div class="kingster-page-title-top-gradient"></div>
    <div class="kingster-page-title-bottom-gradient"></div>
    <div class="kingster-page-title-container kingster-container">
        <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 460px; padding-bottom: 60px;">
            <h1 class="kingster-page-title" style="font-size: 48px; font-weight: 700; text-transform: none; letter-spacing: 0px; color: #ffffff;">Profile</h1>
        </div>
    </div>
</div>
<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
            <!-- Breadcrumb NavXT 6.5.0 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Kingster - College." href="index.html" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1" />
            </span>
            &gt;
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-page current-item">Profile</span><meta property="url" content="index.html" /><meta property="position" content="2" />
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
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 29px; font-weight: 700; letter-spacing: 0px; text-transform: none;">Tentang Kami</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                        <div class="gdlr-core-divider-container" style="max-width: 265px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166; border-width: 4px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-justify gdlr-core-pbf-column gdlr-core-column-40">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none;">
                                            <p>
                                                {!!$profil->description!!}
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
    </div>
</div>
</div>
</div>
@endsection
