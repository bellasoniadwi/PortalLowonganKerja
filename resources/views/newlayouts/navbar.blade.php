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
                        <button class="dropdown-item has-icon text-danger" type="submit"
                            onclick="return confirm('Are you sure?')">
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
                        <a class="nav-link" href="#">ABOUT</a>
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
