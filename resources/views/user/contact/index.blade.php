@extends('user.layouts.app')

@section('content')

<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="gdlr-core-page-builder-body">
        <div class="gdlr-core-pbf-wrapper" style="padding: 250px 0px 160px 0px;">
            <div class="gdlr-core-pbf-background-wrap">
                <div
                    class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                    style="background-image: url({{asset('user')}}/upload/image-bg-1.jpg); background-size: cover; background-position: center;"
                    data-parallax-speed="0.3"
                ></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="clearfix gdlr-core-title-item-title-wrap">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 75px; font-weight: 700; letter-spacing: 0px; text-transform: none; color: #ffffff;">Contact Us</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" style="padding: 50px 0px 40px 0px;" data-skin="White Text">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #161616;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-phone" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">Phone</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px; text-transform: none; color: #3db166;">
                                            <p><a href="#">{{$contact->phone}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-whatsapp" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">WhastsApp</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                <a href="{{$contact->whatsapp}}"><span class="__cf_email__" data-cfemail="5d1e3233293c3e291d3a323239313c24382f2e733e3230">{{$contact->whatsapp}}</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">Email</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                <a href="{{$contact->email}}"><span class="__cf_email__" data-cfemail="5d1e3233293c3e291d3a323239313c24382f2e733e3230">{{$contact->email}}</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-instagram" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">Instagram</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                <a href="{{$contact->instagram}}"><span class="__cf_email__" data-cfemail="5d1e3233293c3e291d3a323239313c24382f2e733e3230" target="_blank">View On Instagram</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-facebook-square" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">Facebook</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                <a href="{{$contact->facebook}}"><span class="__cf_email__" data-cfemail="5d1e3233293c3e291d3a323239313c24382f2e733e3230" target="_blank">View On Facebook</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px;">
                                        <i class="gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #ffffff; font-size: 40px; min-width: 40px; min-height: 40px;"></i>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 26px; letter-spacing: 0px; text-transform: none;">Location</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                {{$contact->address}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p><a href="https://www.google.com/maps/place/7%C2%B039'21.5%22S+111%C2%B031'47.4%22E/@-7.655975,111.5276313,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-7.655975!4d111.52982?hl=id" target="_blank">View On Google Map</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" style="padding: 115px 0px 40px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                            <div class="gdlr-core-pbf-background-wrap"></div>
                            <div class="clearfix gdlr-core-pbf-column-content gdlr-core-js" style="max-width: 760px;">
                                <div class="gdlr-core-pbf-element">
                                    <div class="clearfix gdlr-core-title-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px;">
                                        <div class="clearfix gdlr-core-title-item-title-wrap"><h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 39px;">Leave us your info</h3></div>
                                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px; font-style: normal; text-transform: uppercase;">
                                            and we will get back to you.
                                        </span>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                            <form class="quform" action="http://max-themes.net/demos/kingster/college/plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <div class="quform-element">
                                                        <p>

                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Send</span></button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 0px 0px;">
            <div class="gdlr-core-pbf-background-wrap"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb" style="padding-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-" rel="map">
                                <iframe style="width:100%; height:400px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.246460958817!2d111.52983320459532!3d-7.656628061819316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bc29076dbe61%3A0x89676aa18d60d87d!2sTK%2FRA%20Nashrus%20Sunnah!5e0!3m2!1sid!2sid!4v1630629880655!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper" style="padding: 80px 0px 50px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                <div class="clearfix gdlr-core-pbf-wrapper-container gdlr-core-container">
                    <div class="gdlr-core-pbf-element">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
