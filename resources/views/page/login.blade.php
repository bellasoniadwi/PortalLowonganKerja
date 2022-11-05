<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('layoutAuth/images/icons/loker.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('layoutAuth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('layoutAuth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('layoutAuth/images/bg-01.jpg') }}'">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Login Akun
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate="Masukkan username">
                        <input class="input100 @error('username') is-invalid @enderror" type="username" id="username"
                            name="username" placeholder="Username" value="{{ old('username') }}" required
                            autocomplete="username">

                        @error('username')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan password">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" id="password"
                            name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <a class="login100-form-btn-success" href="{{ route('peta.index') }}">
                            Kembali
                        </a>
                        <a></a>
                        <button type="submit" class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <a class="btn btn-link" href="{{ route('register') }}">
                            Belum memiliki akun?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('layoutAuth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('layoutAuth/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/js/main.js') }}"></script>

</body>

</html>
