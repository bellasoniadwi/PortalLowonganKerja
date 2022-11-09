<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Portal Lowongan Pekerjaan</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('aboutus/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('aboutus/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('aboutus/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('aboutus/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('aboutus/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="{{ asset('aboutus/images/logo.png')}}" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <ul class="btn">
                        {{-- <li class="down_btn"><a href="#">Download</a></li> --}}
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="/">Maps</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<body class="main-layout">
  <div class="loader_bg">
    <div class="loader"><img src="{{ asset('aboutus/images/loading.gif')}}" alt="#" /></div>
 </div>
    <!-- about -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="{{ asset('aboutus/images/about_img.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Tentang <span class="blu">LOKERPORTAL</span></h2>
                        <p>LOKERPORTAL adalah sebuah portal berbasis website yang mempermudah pencarian
                            lowongan pekerjaan.
                        </p>
                        <a class="read_more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- choose  section -->
    <div class="choose ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Kenapa Memilih<span class="blu"> LOKERPORTAL ?</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                                <ul class="easy">
                                    <li><a href="#content">Lokasi Terdekat</a></li>
                                    <li><a href="#content">Rute Lokasi</a></li>
                                    <li><a href="#content">Pencarian Mudah</a></li>
                                    <li><a href="#content">Penyebaran Informasi</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 padding_left0">
                                <div class="choose_box" id="content">
                                    <i><img src="{{ asset('aboutus/images/admin.png') }}" alt="#" /></i>
                                    <h3>LOKERPORTAL</h3>
                                    <p>Beberapa alasan yang mendasari mengapa anda perlu menggunakan LOKERPORTAL<br>
                                    1. LOKERPORTAL menampilkan ada/tidaknya lowongan pekerjaan dengan tampilan <br>
                                       berupa maps, sehingga pengguna bisa mengetahui Lowongan dengan lokasi jarak<br>
                                       yang berdekatan dengannya<br>
                                    2. LOKERPORTAL mampu menampilkan rute menuju lokasi lowongan yang dituju<br>
                                    3. Dengan LOKERPORTAL, pengguna bisa mencari pekerjaan yang sesuai dengan kriteria<br>
                                    4. LOKERPORTAL membantu penyebaran Informasi Lowongan Pekerjaan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end choose  section -->
    <!--  footer -->
    <footer>
      
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
       
   </footer>
   <!-- end footer -->
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{{ asset('aboutus/js/jquery.min.js') }}"></script>
    <script src="{{ asset('aboutus/js/popper.min.js') }}"></script>
    <script src="{{ asset('aboutus/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('aboutus/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('aboutus/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('aboutus/js/custom.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'public/aboutus/images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
