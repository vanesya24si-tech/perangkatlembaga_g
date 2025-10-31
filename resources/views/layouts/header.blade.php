  {{-- Header --}}
  <header id="header" class="header fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- Logo --}}
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhFJitoC725GZJ7DxrEnETlaCKAX3oGlc3xr_B-KfO91__OiyJcWAABdKS35UoSwYuo9Ju1UREwFCNmkvYk5pxU-TkuAQHsXrFrLdDhEF5RHt1dYQzzvMuSeJ4-meZkhDjS6gC5AyGY_srg717jKIozGBxQKT3avA1vZelRJR0sjC6urhRVw26TbD0t/s2000/GKL30_Lembaga%20Pemberdayaan%20Masyarakat%20(LPM)%20-%20Koleksilogo.com.jpg" alt="Logo" class="logo-img" style="height:60px;">
        <h1 class="logo-text ms-1 mb-1">LPM</h1>
      </a>

      {{-- Navigation Menu --}}
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
          <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">Data Warga</a></li>
          <li><a href="{{ url('/resume') }}" class="{{ request()->is('resume') ? 'active' : '' }}">Perangkat Desa</a></li>
          <li><a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Lembaga Desa</a></li>
          <li><a href="{{ url('/portfolio') }}" class="{{ request()->is('portfolio') ? 'active' : '' }}">Informasi Umum</a></li>
          <li><a href="{{ url('/login') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Login</a></li>
          <li class="dropdown">
            <a href="#"><span>Laporan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Pengaduan</a></li>
            </ul>
          </li>

            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- Social Links --}}
      <div class="header-social-links d-none d-lg-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>
