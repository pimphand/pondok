<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pondok Nashrus Sunnah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/profil/'. $logo->logo) }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="pt-5 my-5 account-pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="overflow-hidden card">
                        <div class="bg-primary">
                            <div class="p-4 text-center text-primary">
                                <h5 class="text-white font-size-20">Login</h5>
                                <p class="text-white-50">Selamat Datang di Sistem</p>
                                <a href="#" class="logo-admin logo">
                                    <img src="{{ asset('storage/profil/'. $logo->logo) }}" height="70" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="p-4 card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="p-3">
                                <form method="POST" action="{{ route('login') }}" class="mt-4">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input id="username" class="form-control" type="text" name="username"
                                            value="admin" required autofocus placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input id="password" class="form-control" type="password" name="password"
                                            value="admin" required autocomplete="current-password"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="mb-0">?? <script>
                                document.write(new Date().getFullYear())
                            </script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/node-waves/waves.min.js"></script>

    <script src="{{ asset('admin') }}/assets/js/app.js"></script>

</body>

</html>
