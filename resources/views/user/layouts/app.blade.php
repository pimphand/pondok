<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Pondok Nashrus Sunnah Madiun | {{ $title ?? "Beranda"  }}</title>

    <link rel="shortcut icon" href="{{ asset('storage/profil/'. $logo->logo) }}">
    <link rel="stylesheet" href="{{asset('user')}}/css/common-skeleton.mind41d.css?" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/tooltip.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/font-awesome.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/elegant-font.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/page-builder.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/plugins/revslider/public/assets/css/rs6.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/style-core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('user')}}/css/kingster-style-custom.css" type="text/css" media="all" />

    <link rel="stylesheet" id="gdlr-core-google-font-css"
        href="https://fonts.googleapis.com/css?family=Jost%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2Citalic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&subset=cyrillic%2Clatin%2Clatin-ext%2Ccyrillic-ext%2Cvietnamese&ver=5.8"
        type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400%2C700%7CRoboto:400" rel="stylesheet"
        property="stylesheet" media="all" type="text/css" />

    @yield('css')
    @livewireStyles

</head>

<body class="home page-template-default page page-id-6208 gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full kingster-with-sticky-navigation kingster-sticky-navigation-no-logo kingster-blockquote-style-1 gdlr-core-link-to-lightbox">

    @include('user.layouts.mobile')

    <div class="kingster-body-outer-wrapper">
        <div class="clearfix kingster-body-wrapper kingster-with-transparent-header kingster-with-frame">

            @include('user.layouts.navbar')

            @yield('content')

            @include('user.layouts.footer')
        </div>
    </div>



    <script src="{{asset('user') }}/js/jquery/jquery.js" id="jquery-core-js"></script>
    <script src="{{asset('user') }}/plugins/revslider/public/assets/js/rbtools.min.js" id="tp-tools-js"></script>
    <script src="{{asset('user') }}/plugins/revslider/public/assets/js/rs6.min.js" id="revmin-js"></script>
    <script src="{{asset('user') }}/js/kingster-learnpress.js" id="kingster-learnpress-js"></script>
    @yield('js')
    <script>
        function setREVStartSize(e){
            //window.requestAnimationFrame(function() {
                window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
                window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
                    e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                    if(e.layout==="fullscreen" || e.l==="fullscreen")
                        newh = Math.max(e.mh,window.RSIH);
                    else{
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                        e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                        var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                        newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                    }
                    if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                    document.getElementById(e.c).height = newh+"px";
                    window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
                } catch(e){
                    console.log("Failure at Presize of Slider:" + e)
                }
            //});
          };
    </script>
    <script>
        ( function ( body ) {
            'use strict';
            body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
        } )( document.body );
    </script>
    <script>
        /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */
    </script>
    <script>
        if(typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
            err += "</div>";
                var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
            }
        }
    </script>

    <script src="{{asset('user') }}/js/script.js" id="gdlr-core-plugin-js"></script>
    <script id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = {"admin":"","video":{"width":"640","height":"360"},"ajax_url":"#"};
        /* ]]> */
    </script>
    <script src="{{asset('user') }}/js/page-builder.js" id="gdlr-core-page-builder-js"></script>
    <script src="{{asset('user') }}/js/jquery/ui/effect.min.js" id="jquery-effects-core-js"></script>
    <script id="kingster-script-core-js-extra">
        /* <![CDATA[ */
        var kingster_script_core = {"home_url":"index.html"};
        /* ]]> */
    </script>
    <script src="{{asset('user') }}/js/script-core.js" id="kingster-script-core-js"></script>
    <script>
        setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1240,1240,480],el:[1080,1080,1080,500],gw:[1280,1280,1280,480],gh:[1080,1080,1080,500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
        var revapi1,
            tpj;
        function revinit_revslider11() {
        jQuery(function() {
            tpj = jQuery;
            revapi1 = tpj("#rev_slider_1_1");
            if(revapi1==undefined || revapi1.revolution == undefined){
                revslider_showDoubleJqueryError("rev_slider_1_1");
            }else{
                revapi1.revolution({
                    sliderLayout:"fullwidth",
                    visibilityLevels:"1240,1240,1240,480",
                    gridwidth:"1280,1280,1280,480",
                    gridheight:"1080,1080,1080,500",
                    perspective:600,
                    perspectiveType:"local",
                    editorheight:"1080,768,960,500",
                    responsiveLevels:"1240,1240,1240,480",
                    progressBar:{disableProgressBar:true},
                    navigation: {
                        onHoverStop:false,
                        touch: {
                            touchenabled:true
                        }
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid:true
                    },
                });
            }

        });
        } // End of RevInitScript
        var once_revslider11 = false;
        if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
    </script>
    <script>
        var htmlDivCss = unescape(".jost-font%7B%20font-family%3A%20%27jost%27%20%21important%3B%20%7D%0A.lebeaune-font%7B%20font-family%3A%20%27LeBeauneNew%27%20%21important%3B%20%7D");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if(htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }else{
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

    @livewireScripts
</body>

</html>
