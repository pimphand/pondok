<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Admin Nashrus Sunnah Madiun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">

    @include('admin.layouts.css')

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.layouts.topbar')
        @include('admin.layouts.sidebar')

        <div class="main-content">

            @yield('content')


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script> Sistem Informasi Profil Nashrus Sunnah
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('admin.layouts.js')

</body>

</html>
