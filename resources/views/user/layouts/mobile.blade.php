<div class="kingster-mobile-header-wrap">
    <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation" id="kingster-mobile-header">
        <div class="clearfix kingster-mobile-header-container kingster-container">
            <div class="kingster-logo kingster-item-pdlr kingster-mobile-logo-center">
                <div class="kingster-logo-inner">
                    <a class="" href="{{ route('home') }}"><img
                        src="{{ asset('storage/profil/'. $logo->logo) }}" alt="" width="200"
                        height="200" title="logo HP" /></a>
                </div>
            </div>
            <div class="kingster-mobile-menu-right">
                <div class="kingster-main-menu-search" id="kingster-mobile-top-search"><i class="fa fa-search"></i>
                </div>
                <div class="kingster-top-search-wrap">
                    <div class="kingster-top-search-close"></div>

                    <div class="kingster-top-search-row">
                        <div class="kingster-top-search-cell">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="text" class="search-field kingster-title-font" placeholder="Search..."
                                    value="" name="s" />
                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                <input type="submit" class="search-submit" value="Search" />
                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                <input type="hidden" name="ref" value="course" /><input type="hidden" name="post_type"
                                    value="lp_course" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kingster-mobile-menu-left">
                <div class="kingster-mobile-menu">
                    <a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger"
                        href="#kingster-mobile-menu"><span></span></a>
                    <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu"
                        data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            <li
                                class="menu-itemmenu-item-home current-menu-item page_item page-item-6208 current_page_item ">
                                <a href="{{ route('home') }}" aria-current="page">Beranda</a>
                            </li>

                            <li class="menu-item menu-item-has-children ">
                                <a href="#">Tentang Kami</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('profil') }}">Profil</a></li>
                                    <li class="menu-item"><a href="{{ route('visionmission') }}">Visi & Misi</a></li>
                                    <li class="menu-item"><a href="{{ route('sejarah') }}">Sejarah</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children ">
                                <a href="#">Akademik</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('guru') }}">Guru</a></li>
                                    <li class="menu-item"><a href="{{ route('kalender') }}">Kalender Akademik</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('user.news') }}">Berita</a></li>
                            <li class="menu-item menu-item-has-children ">
                                <a href="#">Galery</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('video') }}">Video</a></li>
                                    <li class="menu-item"><a href="{{ route('photo') }}">Foto</a></li>
                                </ul>
                            </li>
                            <li class="menu-itemmenu-item-has-children ">
                                <a href="blog-full-right-sidebar-with-frame.html">Santri</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a
                                            href="blog-full-right-sidebar.html">Asrama</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('female') }}">Asrama Putri</a></li>
                                            <li class="menu-item"><a href="{{ route('male') }}">Asrama Putra</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a
                                            href="blog-grid-3-columns-no-space.html">Kegiatan Santri</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{ route('kegiatanputri') }}">Putri</a></li>
                                            <li class="menu-item"><a href="{{ route('kegiatanputra') }}">Putra</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{route('pendaftaran')}}">Pendaftaran</a></li>
                            <li class="menu-item"><a href="{{route('contact')}}">Kontak</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
