@auth
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{route('home')}}">Portal</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">Pl</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="@yield('home')"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-desktop"></i> <span>Dashboard</span></a></li>

                <li class="menu-header">Main Menu</li>
                <li class="@yield('peta')"><a class="nav-link" href="{{ route('titik.index') }}"><i class="fas fa-map-marker-alt"></i> <span>Peta</span></a></li>
                @can('admin')
                <li class="@yield('perusahaan')"><a class="nav-link" href="{{ route('perusahaan') }}"><i class="fas fa-city"></i> <span>Perusahaan</span></a></li>
                @endcan
                <li class="@yield('lowonganpekerjaan')"><a class="nav-link" href="{{ route('lowonganpekerjaan.index') }}"><i class="far fa-newspaper"></i> <span>Lowongan Aktif</span></a></li>
                
                <li class="@yield('lowonganpekerjaan-inactive')"><a class="nav-link" href="{{ route('lowonganpekerjaan.inactive') }}"><i class="fas fa-book"></i> <span> Arsip Lowongan</span></a></li>
                
                @can('admin')
                <li class="@yield('kategori')"><a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-clipboard-list"></i> <span>Kategori</span></a></li>
                @endcan
            </ul>

        </aside>
    </div>
@endauth
@guest
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Portal</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Pl</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Kategori
                        Pekerjaan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Perdagangan</a></li>
                    <li><a class="nav-link" href="#">Industri</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Jabatan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Kasir</a></li>
                    <li><a class="nav-link" href="#">Pelayan</a></li>
                    <li><a class="nav-link" href="b#">Tukang</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
@endguest
