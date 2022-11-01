<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('layoutAuth/images/icons/favicon.ico') }}" />
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
                    Daftar Akun
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Enter Name">
                        <input class="input100 @error('nama') is-invalid @enderror" type="text" name="nama"
                            id="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required
                            autocomplete="nama">

                        @error('nama')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Username">
                        <input class="input100 @error('username') is-invalid @enderror" type="username" name="username"
                            id="username" placeholder="Username" value="{{ old('username') }}" required
                            autocomplete="username">

                        @error('username')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Email">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            id="email" placeholder="Email" value="{{ old('email') }}" required
                            autocomplete="email">

                        @error('email')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            id="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input type="password" class="input100" id="password-confirm"
                            placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Number">
                        <input class="input100 @error('no_telp') is-invalid @enderror" type="number" name="no_telp"
                            id="no_telp" placeholder="No Telepon" value="{{ old('no_telp') }}" required
                            autocomplete="no_telp">

                        @error('no_telp')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Perusahaan">
                        <input class="input100 @error('perusahaan') is-invalid @enderror" type="text"
                            name="perusahaan" id="perusahaan" placeholder="Agency / Office"
                            value="{{ old('perusahaan') }}" required autocomplete="perusahaan">

                        @error('perusahaan')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Image">
                        <input class="input100 @error('foto') is-invalid @enderror" type="file" name="foto"
                            onchange="return showPreview(this)" id="foto" placeholder="Upload Foto Profil"
                            required autocomplete="profil">

                        @error('profil')
                            <span class="focus-input100" data-placeholder="&#xe82a;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <a class="login100-form-btn-success" href="{{ route('peta.index') }}">
                            Back to Maps
                        </a>
                        
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Already have an account?
                        </a>
                    </div>
                </form>
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
