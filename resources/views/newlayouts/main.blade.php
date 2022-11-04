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
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/modules/summernote/summernote-bs4.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('newlayouts/dist/assets/css/components.css')}}">

  <!-- Leaflet JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
  <script src="{{ asset('leaflet/leaflet.js') }}"></script>
  <!-- Leaflet Search -->
  <link rel="stylesheet" href="{{ asset('leaflet-search/dist/leaflet-search.min.css') }}">
  <script src="{{ asset('leaflet-search/dist/leaflet-search.min.js') }}"></script>

  <script src="{{ asset('jQuery/jquery-3.6.0.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>

  <!-- Leaflet Routing Machine -->
  <link rel="stylesheet" href="{{ asset('leaflet-routing-machine/dist/leaflet-routing-machine.css')}}" />
  
  <!--link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" /-->
  <script src="{{asset('leaflet-routing-machine/dist/leaflet-routing-machine.js')}}"></script>
  <script src="{{asset('leaflet-routing-machine/examples/Control.Geocoder.js')}}"></script>
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          <div class="navbar-bg"></div>
            @include('newlayouts.navbar')
            @include('newlayouts.sidebar')
            <div class="main-content">
              <section class="section">
                @yield('content')
              </section>
            </div>
            @include('newlayouts.footer')
        </div>
    </div>

    @include('sweetalert::alert')
    @yield('js')

    <!-- General JS Scripts -->
  <script src="{{ asset('newlayouts/dist/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('newlayouts/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('newlayouts/dist/assets/js/page/index-0.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('newlayouts/dist/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('newlayouts/dist/assets/js/custom.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="sbadmin2/js/sb-admin-2.min.js"></script>
</body>