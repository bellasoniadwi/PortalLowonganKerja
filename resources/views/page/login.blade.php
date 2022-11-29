<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Portal</title>
    <link rel="icon" type="image/png" href="{{ asset('layoutAuth/images/icons/loker.png') }}" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('layoutAuth/images/icons/loker.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="username" id="username" name="username" class="form-control @error('username') is-invalid @enderror" tabindex="1"
                                            value="{{ old('username') }}" required autofocus>

                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" tabindex="2"
                                            required>

                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row sm-gutters">
                                        <div class="col-6">
                                            <a class="btn btn-success btn-lg btn-block" tabindex="4"
                                                href="{{ route('peta.index') }}">
                                                Kembali
                                            </a>
                                        </div>

                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                tabindex="3">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Belum memiliki akun? <a href="{{ route('register') }}">Daftar Sekarang!</a>
                        </div>
                        {{-- <div class="simple-footer">
                            Copyright &copy; Kelompok 8 - Proyek 2 <div class="bullet"></div> Designed By <a
                                href="https://nauv.al/">Muhamad
                                Nauval Azhar</a> Distributed By <a href="https://themewagon.com/">Themewagon</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; Kelompok 8 - Proyek 2 <div class="bullet"></div> Designed By <a href="https://nauv.al/">Muhamad
                Nauval Azhar</a> Distributed By <a href="https://themewagon.com/">Themewagon</a>
        </div>
        <div class="footer-right">
        </div>
    </footer>

    <!-- General JS Scripts -->
    <script src="{{ asset('newlayouts/dist/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('newlayouts/dist/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('newlayouts/dist/assets/js/custom.js') }}"></script>
</body>

</html>
