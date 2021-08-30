<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login | Veltrix - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
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
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to Veltrix.</p>
                                <a href="index.html" class="logo logo-admin">
                                    <img src="{{ asset('admin') }}/assets/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="p-4 card-body">
                            <div class="p-3">
                                <form method="POST" action="{{ route('login') }}" class="mt-4">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <input id="username" class="form-control" type="text" name="username" :value="old('email')"
                                        required autofocus placeholder="Enter username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="current-password" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="pages-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
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


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="username" :value="__('Email')" />

                <x-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('email')"
                    required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
