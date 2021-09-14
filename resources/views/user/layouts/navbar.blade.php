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
                            <li class="menu-item kingster-normal-menu">
                                <a href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="menu-item menu-item-has-children kingster-normal-menu">
                                <a href="#" class="sf-with-ul-pre">Tentang Kami</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('profil') }}">Profil</a>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('visionmission') }}">Visi dan Misi</a>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('sejarah') }}">Sejarah</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children kingster-normal-menu">
                                <a href="javascript:void(0)" class="sf-with-ul-pre">Akademik</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60"><a href="{{ route('guru') }}">Guru</a>
                                    </li>
                                    <li class="menu-item" data-size="60"><a href="{{ route('kalender') }}">Kalender
                                            Akademik</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item kingster-normal-menu">
                                <a href="{{ route('user.news') }}">Berita</a>
                            </li>
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
                                <a href="javascript:void(0)" class="sf-with-ul-pre">Galery</a>
                                <ul class="sub-menu">
                                    <li class="menu-item" data-size="60"><a href="{{ route('video') }}">Video</a>
                                    </li>
                                    <li class="menu-item" data-size="60"><a href="{{ route('photo') }}">Photo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children kingster-normal-menu">
                                <a href="course-list-1.html" class="sf-with-ul-pre">Santri</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="">Asrama</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60">
                                                <a href="{{ route('female') }}">Asrama Putri</a>
                                                <a href="{{ route('male') }}">Asrama Putra</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('female') }}">Kegiatan Santri</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60">
                                                <a href="{{ route('kegiatanputri') }}">Putri</a>
                                                <a href="{{ route('kegiatanputra') }}">Putra</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children kingster-normal-menu">
                                <a href="" class="sf-with-ul-pre">Pendaftaran</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="{{ route('daftar-ra') }}">Raudhathul Athfal</a>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('daftar-sd') }}">Madrasah Salafiyah Ula Setara SD</a>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('daftar-smp') }}">Madrasah Salafiyah Wustha Setara SMP</a>
                                    </li>
                                    <li class="menu-item" data-size="60">
                                        <a href="{{ route('daftar-sma') }}">Madrasah Salafiyah Ulya Setara SMA</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item kingster-normal-menu"><a href="{{ route('contact') }}">Kontak</a></li>
                        </ul>
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
