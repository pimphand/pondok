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

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
