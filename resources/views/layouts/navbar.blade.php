<header class="header_section">
  <div class="container">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.html">
        <img src="" alt="">
        <span class="ml-2 font-semibold">Sampah Kita</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="s-1"></span>
        <span class="s-2"></span>
        <span class="s-3"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a class="nav-link font-medium" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-medium" href="{{ route('pemesanan') }}">Pemesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-medium" href="{{ route('jadwal') }}">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-medium" href="{{ route('layanan') }}">Layanan</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link font-medium dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('login') }}">Login</a>
              <a class="dropdown-item" href="{{ route('register') }}">Daftar</a>
            </div>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>
</header>
