<a href="index.html" class="logo d-flex align-items-center me-auto">
  <!-- Uncomment the line below if you also wish to use an image logo -->
  <img src="assets/images/arrauflogo.png" alt="">
  {{-- <h1 class="sitename">Ar-Rauf</h1> --}}
</a>

<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="/" class="{{ (request()->segment(1) == "") ? 'active' : '' }}">Halaman Depan</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "tk") ? 'active' : '' }}">TK</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "sd") ? 'active' : '' }}">SD</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "unitusaha") ? 'active' : '' }}">Unit Usaha</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "tentangkami") ? 'active' : '' }}">Tentang Kami</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "kontak") ? 'active' : '' }}">Kontak</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "news") ? 'active' : '' }}">News</a></li>
    <li><a href="#" class="{{ (request()->segment(1) == "daftar") ? 'active' : '' }}">Daftar PPDB</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>