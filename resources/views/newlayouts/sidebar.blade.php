@auth
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{route('home')}}">LokerPortal</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{route('home')}}">LP</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="@yield('home')"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-desktop"></i> <span>Dashboard</span></a></li>

                <li class="menu-header">Main Menu</li>
                <li class="@yield('maps')"><a class="nav-link" href="{{ route('titik.index') }}"><i class="fas fa-map-marker-alt"></i> <span>Peta</span></a></li>
                @can('admin')
                <li class="@yield('perusahaan')"><a class="nav-link" href="{{ route('perusahaan.index') }}"><i class="fas fa-city"></i> <span>Perusahaan</span></a></li>
                @endcan
                <li class="@yield('lowonganpekerjaan')"><a class="nav-link" href="{{ route('lowonganpekerjaan.index') }}"><i class="far fa-newspaper"></i> <span>Lowongan Pekerjaan</span></a></li>
                
                <li class="@yield('lowonganpekerjaan-inactive')"><a class="nav-link" href="{{ route('lowonganpekerjaan.inactive') }}"><i class="fas fa-book"></i> <span> Arsip Lowongan</span></a></li>
                
                @can('admin')
                <li class="@yield('kategori')"><a class="nav-link" href="{{ route('kategori.index') }}"><i class="fas fa-clipboard-list"></i> <span>Kategori</span></a></li>
                <li class="@yield('faqs')"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-comment-alt"></i> <span>Pertanyaan</span></a></li>
                @endcan
            </ul>

        </aside>
    </div>
@endauth