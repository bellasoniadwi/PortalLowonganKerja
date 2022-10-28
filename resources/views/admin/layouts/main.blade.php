@include('admin.layouts.header')
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  @if (route('home'))
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">{{ env('APP_NAME') }}</a>
  @else
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
  @endif
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="{{ route('logout') }}" method="post">
          @method('post')
          @csrf
          <button class="nav-link px-3 btn btn-dark" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="log-out"></i> Sign out</button>
        </form>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Main Menu</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/titik*') ? 'active' : '' }}" href="{{ route('titik.index') }}">
                <span data-feather="map" class="align-text-bottom"></span>
                Peta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/toko*') ? 'active' : '' }}" href="{{ route('toko.index') }}">
                <span data-feather="cpu" class="align-text-bottom"></span>
                Perusahaan
              </a>
            </li>
            @can('admin')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/status*') ? 'active' : '' }}" href="{{ route('status.index') }}">
                <span data-feather="tag" class="align-text-bottom"></span>
                Status
              </a>
            </li>
            @endcan
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/layanan*') ? 'active' : '' }}" href="{{ route('layanan.index') }}">
                <span data-feather="target" class="align-text-bottom"></span>
                Layanan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/transaksi*') ? 'active' : '' }}" href="{{ route('transaksi.index') }}">
                <span data-feather="clipboard" class="align-text-bottom"></span>
                Transaksi
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2 text-dark">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">Home</a>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div class="container container-fluid">
          @yield('content')
        </div>

        <!-- Footer -->
        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-bottom">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/home" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <i data-feather="home"></i>
              </a>
              <span class="mb-3 mb-md-0 text-muted">&copy; 2022 {{ env('APP_NAME') }} Team, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/satriai0805"><i data-feather="facebook"></i></a></li>
              <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/satriairawan05_/"><i data-feather="instagram"></i></a></li>
              <li class="ms-3"><a class="text-muted" href="https://twitter.com/satriairawan05_"><i data-feather="twitter"></i></a></li>
            </ul>
          </footer>
        </div>

      </main>
    </div>
  </div>
  @include('admin.layouts.footer')