<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Portal Lowongan Pekerjaan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
            	Maaf Anda tidak memiliki akses
            </div>
            <div class="page-search">
              <form>              	
                <div class="form-group floating-addon floating-addon-not-append">
                  <div class="input-group">
                    {{-- <div class="input-group-prepend">
                      <div class="input-group-text">                          
                        <i class="fas fa-search"></i>
                      </div>
                    </div> --}}
                    {{-- <input type="text" class="form-control" placeholder="Search"> --}}
                    {{-- <div class="input-group-append">
                      <button class="btn btn-primary btn-lg">
                        Search
                      </button>
                    </div> --}}
                  </div>
                </div>
              </form>
              <div class="mt-3">
                <a href="{{route('home')}}">Kembali ke Dashboard</a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-left">
          Copyright &copy; Kelompok 8 - Proyek 2 <div class="bullet"></div> Designed By <a href="https://nauv.al/">Muhamad
            Nauval Azhar</a> Distributed By <a href="https://themewagon.com/">Themewagon</a>
      </div>
    </section>
  </div>
</html>