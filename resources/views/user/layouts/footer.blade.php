<footer class="kingster-no-title-divider">
    <div class="kingster-footer-wrapper">
        <div class="clearfix kingster-footer-container kingster-container">
            <div class="kingster-footer-column kingster-item-pdlr kingster-column-20">
                <div id="text-2" class="widget widget_text kingster-widget">
                    <div class="textwidget">
                        <p>
                            <img src="{{ asset('storage/profil/'. $logo->logo) }}" alt="" width="100" /><br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="kingster-footer-column kingster-item-pdlr kingster-column-20">
                <div id="gdlr-core-custom-menu-widget-2"
                    class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                    <h3 class="kingster-widget-title">Berita Terbaru</h3>
                    <span class="clear"></span>
                    <div class="menu-our-campus-container">
                        <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            @foreach ($berita as $newss)
                            <li class="menu-item kingster-normal-menu">
                                <a href="{{ route('detail.news', $newss->slug) }}">{{ $newss->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                <div id="gdlr-core-custom-menu-widget-4"
                    class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                    <h3 class="kingster-widget-title">Fasilitas</h3>
                    <span class="clear"></span>
                    <div class="menu-academics-container">
                        <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            <li class="menu-item kingster-normal-menu"><a href="{{ route('male') }}">Asrama Putra</a>
                            </li>
                            <li class="menu-item kingster-normal-menu"><a href="{{ route('female') }}">Asrama Putri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-copyright-wrapper">
        <div class="clearfix kingster-copyright-container kingster-container">
            <div class="kingster-copyright-left kingster-item-pdlr">
                <script>
                    document.write(new Date().getFullYear())
                </script> Sistem Informasi Profil Nashrus Sunnah
            </div>
            <div class="kingster-copyright-right kingster-item-pdlr">
                <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align"
                    style="padding-bottom: 0px;">
                    <a href="{{DB::table('contacts')->first()->facebook}}" target="_blank" class="gdlr-core-social-network-icon" title="facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="{{DB::table('contacts')->first()->instagram}}" target="_blank" class="gdlr-core-social-network-icon" title="instagram"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
