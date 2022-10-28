<style>
  .navbar-nav .nav-link.active {
    color: #dc3545;
  }

  .navbar-nav .nav-link:hover {
    color: #dc3545;
  }

  .navbar-brand:hover {
    color: #dc3545;
  }

</style>
<!-- Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      @guest
      <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
      @endguest
      @auth
      <a class="navbar-brand" href="{{ route('home') }}">Home</a>
      @endauth
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-lg-auto">
          <a class="nav-link nav-item {{ Request::is('transaksi') ? 'active' : '' }}" href="{{ route('track.index') }}"><i data-feather="git-merge"></i> Track</a>
          @guest
          <a class="nav-link nav-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i data-feather="log-in"></i> Sign In</a>
          <a class="nav-link nav-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}"><i data-feather="user-plus"></i> Sign Up</a>
          @endguest
        </div>
      </div>
    </div>
  </nav>
</div>
