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
      <link rel="stylesheet" href="{{ asset('aboutus/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('aboutus/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('aboutus/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('aboutus/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('aboutus/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
         <!-- about -->
         <div id="about"  class="about">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-5">
                     <div class="about_img">
                        <figure><img src="{{ asset('aboutus/images/about_img.jpg')}}" alt="#"/></figure>
                     </div>
                  </div>
                  <div class="col-md-7">
                     <div class="titlepage">
                        <h2>About <span class="blu">Software</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
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
                        <h2>Why <span class="blu"> Choose Us</span></h2>
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
                                 <li class="active"><a href="#">Easy to cutomize</a></li>
                                 <li><a href="#">More flexible</a></li>
                                 <li><a href="#">Clean mode</a></li>
                                 <li><a href="#">Ratinaready</a></li>
                              </ul>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 padding_left0">
                              <div class="choose_box">
                                 <i><img src="{{ asset('aboutus/images/admin.png')}}" alt="#"/></i>
                                 <h3> Ad Minim</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end choose  section -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="{{ asset('aboutus/js/jquery.min.js')}}"></script>
      <script src="{{ asset('aboutus/js/popper.min.js')}}"></script>
      <script src="{{ asset('aboutus/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('aboutus/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('aboutus/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('aboutus/js/custom.js')}}"></script>
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
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

