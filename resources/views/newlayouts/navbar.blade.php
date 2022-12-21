@auth
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    {{-- <img alt="image" src="{{ asset('storage/' . Auth()->user()->foto) }}" class="rounded-circle mr-1"> --}}
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth()->user()->nama }}</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/dashboard/profile/{{ Auth()->user()->id }}/edit" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <form action="{{ route('logout') }}" method="post">
                        @method('post')
                        @csrf
                        <button class="dropdown-item has-icon text-danger show_confirmation" type="submit">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
@endauth
@section('js')
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirmation').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Yakin Ingin Keluar ?`,
              text: "Setelah Anda keluar, Anda harus login kembali apabila ingin memanajemen akun Anda",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willLogout) => {
            if (willLogout) {
              form.submit();
              swal("Anda Berhasil Logout. Selamat Tinggal :(");
            } else {
                swal("Terima Kasih :)");
            }
          });
      });
  
</script>
@endsection

@guest
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="/" class="navbar-brand sidebar-gone-hide">LOKERPORTAL</a>
    {{-- <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a> --}}
    <div class="nav-collapse">
      <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
        <i class="fas fa-bars"></i>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item @yield('maps')"><a href="/" class="nav-link">MAPS</a></li>
        <li class="nav-item @yield('about')"><a href="{{ route('peta.about') }}" class="nav-link">ABOUT</a></li>
        <li class="nav-item @yield('faq')"><a href="{{ route('faq.user') }}" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">LOGIN</a></li>
      </ul>
    </div>
    <form class="form-inline ml-auto">
      <a href="{{ route('tracking.index') }}" class="nav-link"><i class="fa fa-search" aria-hidden="true"></i>  SEARCH</a>
    </form>
  </nav>

  <nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link"><i class="@yield('icon')"></i><span>@yield('judul')</span></a>
        </li>
      </ul>
    </div>
  </nav>

@endguest

