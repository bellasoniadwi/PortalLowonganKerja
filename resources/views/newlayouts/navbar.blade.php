@auth
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                </li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                            class="fas fa-search"></i></a></li>
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
@guest
    <div class="card-body">
        <nav class="navbar navbar-expand-lg bg-primary">

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('about')" href="{{ route('peta.about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <form class="form-inline">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </span>
            </div>
        </nav>
    </div>
@endguest

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