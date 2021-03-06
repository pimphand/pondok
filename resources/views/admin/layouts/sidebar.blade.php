<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}" class="waves-effect">
                        <i class="ti-user"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>admin</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register.index') }}" class="waves-effect">
                        <i class="fas fa-clipboard-list"></i><span
                            class="badge rounded-pill bg-primary float-end"></span>
                        <span>Pendaftaran</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-clipboard-list"></i>
                        <span>Pendaftaran</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('ra.index')}}" class=" waves-effect">
                                <span>RA</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('sd.index')}}" class=" waves-effect">
                                <span>SD</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('smp.index')}}" class=" waves-effect">
                                <span>SMP</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('sma.index')}}" class=" waves-effect">
                                <span>SMA</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="menu-title">Informasi</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-info-circle"></i>
                        <span>Pendaftaran</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('ra')}}" class=" waves-effect">RA</a>
                        </li>
                        <li>
                            <a href="{{ route('sd') }}">SD</a>
                        </li>
                        <li>
                            <a href="{{ route('smp') }}">SMP</a>
                        </li>
                        <li>
                            <a href="{{ route('sma') }}">SMA</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-newspaper"></i>
                        <span>Berita</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('kategori-berita.index')}}" class=" waves-effect">
                                Kategori
                            </a>
                        </li>
                        <li><a href="{{ route('news.index') }}">List</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="sub-menu" aria-expanded="false">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ti-face-smile"></i>
                            <span>Icons</span>
                        </a>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-atlas"></i>
                        <span>Website</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('profile.index')}}" class=" waves-effect">
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact.index')}}" class=" waves-effect">
                                <span>Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('vision.index')}}" class=" waves-effect">
                                <span>Visi & Misi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('video.index')}}" class=" waves-effect">
                                <span>Video</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('photos.index')}}" class=" waves-effect">
                                <span>Photo</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">Akademik</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-book-open"></i>
                        <span>Akademik</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('teacher.index')}}" class=" waves-effect">
                                <span>Guru</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('calender.index')}}" class=" waves-effect">
                                <span>Kalender Akademik</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">Santri</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-female"></i>
                        <span>Santri Putri</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('putri.index')}}" class=" waves-effect">
                                <i class="fas fa-book-reader"></i>
                                <span>Fasilitas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('female.index')}}" class=" waves-effect">
                                <i class="fas fa-images"></i>
                                <span>Kegiatan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-male"></i>
                        <span>Santri Putra</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('facility.man')}}" class=" waves-effect">
                                <i class="fas fa-book-reader"></i>
                                <span>Fasilitas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('activity.male')}}" class=" waves-effect">
                                <i class="fas fa-images"></i>
                                <span>Kegiatan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
