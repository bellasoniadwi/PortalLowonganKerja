<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register Portal</title>
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
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('layoutAuth/images/icons/loker.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama"
                                                class="form-control @error('nama') is-invalid @enderror" tabindex="1"
                                                value="{{ old('nama') }}" required autofocus>
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="perusahaan">Perusahaan</label>
                                            <input type="text" name="perusahaan" id="perusahaan"
                                                class="form-control @error('perusahaan') is-invalid @enderror" tabindex="3"
                                                value="{{ old('perusahaan') }}" required>
                                            @error('perusahaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username"
                                                class="form-control @error('username') is-invalid @enderror" tabindex="2"
                                                value="{{ old('username') }}" required>
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" tabindex="5"
                                                required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror" tabindex="3"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password_confirmation">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="form-control" tabindex="6" required>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="no_telp">Nomor Telepon</label>
                                            <input type="number" name="no_telp" id="no_telp"
                                                class="form-control @error('no_telp') is-invalid @enderror" tabindex="4"
                                                value="{{ old('no_telp') }}" required>
                                            @error('no_telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
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
                                                Daftar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Sudah Memiliki Akun? <a href="{{ route('login') }}">Masuk Sekarang!</a>
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
