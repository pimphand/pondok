<div class="kingster-header-background-transparent">
    <header
        class="clearfix kingster-header-wrap kingster-header-style-plain kingster-style-splitted-menu kingster-sticky-navigation kingster-style-slide"
        data-navigation-offset="75px">
        <div class="kingster-header-background"></div>
        <div class="kingster-header-container kingster-container">
            <div class="clearfix kingster-header-container-inner">
                <div class="clearfix kingster-navigation kingster-item-pdlr">
                    <div class="kingster-main-menu" id="kingster-main-menu">
                        <ul id="menu-main-navigation-1" class="sf-menu">
                            <li
                            class="menu-item kingster-normal-menu">
                            <a href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="menu-item menu-item-has-children kingster-normal-menu">
                            <a href="#" class="sf-with-ul-pre">Menu</a>
                            <ul class="sub-menu">
                                <li class="menu-item" data-size="60"><a href="{{ route('profil') }}">Profile</a></li>
                                <li class="menu-item" data-size="60"><a href="{{ route('visionmission') }}">Vision & Mision</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item kingster-normal-menu"><a href="university-life.html">Galery</a></li>
                        <li class="kingster-center-nav-menu-item">
                            <div class="kingster-logo kingster-item-pdlr">
                                <div class="kingster-logo-inner">
                                    <a class="" href="{{ route('home') }}"><img
                                        src="{{ asset('storage/profil/'. $logo->logo) }}" alt="" width="200"
                                        height="200" title="logo HP" /></a>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item menu-item-has-children kingster-normal-menu">
                                <a href="course-list-1.html" class="sf-with-ul-pre">Fasilitas</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60"><a href="{{ route('male') }}">Asrama Putra</a></li>
                                    <li class="menu-item" data-size="60"><a href="{{ route('female') }}">Asrama Putri</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kingster-normal-menu"><a href="university-life.html">Pendaftaran</a></li>
                            <li class="menu-item kingster-normal-menu"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clearfix kingster-main-menu-right-wrap kingster-item-mglr kingster-navigation-top">
                        <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i>
                        </div>
                        <div class="kingster-top-search-wrap">
                            <div class="kingster-top-search-close"></div>

                            <div class="kingster-top-search-row">
                                <div class="kingster-top-search-cell">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <input type="text" class="search-field kingster-title-font"
                                            placeholder="Search..." value="" name="s" />
                                        <div class="kingster-top-search-submit"><i class="fa fa-search"></i>
                                        </div>
                                        <input type="submit" class="search-submit" value="Search" />
                                        <div class="kingster-top-search-close"><i class="icon_close"></i>
                                        </div>
                                        <input type="hidden" name="ref" value="course" /><input type="hidden"
                                            name="post_type" value="lp_course" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- kingster-navigation -->
            </div>
            <!-- kingster-header-inner -->
        </div>
        <!-- kingster-header-container -->
    </header>
    <!-- header -->
</div>
