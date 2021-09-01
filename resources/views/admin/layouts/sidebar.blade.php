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
                <li class="menu-title">Berita</li>
                <li>
                    <a href="{{route('kategori-berita.index')}}" class=" waves-effect">
                        <i class="dripicons-duplicate"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.index')}}" class=" waves-effect">
                        <i class="dripicons-document-new"></i>
                        <span>News</span>
                    </a>
                </li>

                <li class="menu-title">Website</li>
                <li>
                    <a href="{{route('profile.index')}}" class=" waves-effect">
                        <i class="fas fa-baby"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('contact.index')}}" class=" waves-effect">
                        <i class="ion ion-md-call"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('vision.index')}}" class=" waves-effect">
                        <i class="fab fa-invision"></i>
                        <span>Visi & Misi</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('teacher.index')}}" class=" waves-effect">
                        <i class="fas fa-user-tie"></i>
                        <span>Teacher</span>
                    </a>
                </li>

                <li class="menu-title">Santri</li>
                <li>
                    <a href="{{route('news.index')}}" class=" waves-effect">
                        <i class="fas fa-book-reader"></i>
                        <span>Fasilitas</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.index')}}" class=" waves-effect">
                        <i class="fas fa-images"></i>
                        <span>Kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.index')}}" class=" waves-effect">
                        <i class="fas fa-list-alt"></i>
                        <span>Pendaftaran</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
