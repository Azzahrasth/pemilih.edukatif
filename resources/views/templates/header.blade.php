<nav class="navbar navbar-expand-lg navbar-dark poppins-bold" style="background-color: #162f50">
  <a class="navbar-brand" href="#">
    <img src="{{ asset('storage/images/Logo.png') }}" alt="Logo PeLif" class="img-fluid" style="width: 141px" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item {{ request()->is('/') ? 'active' : '' }} pr-lg-4">
        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
      </li>
      <li class="nav-item {{ request()->is('kandidat') ? 'active' : '' }} dropdown pr-lg-4">
        <a class="nav-link dropdown-toggle" href="kandidat.html" id="navbarDropdownMenuLink"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kandidat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="kandidat.html">Gubernur</a>
          <a class="dropdown-item" href="kandidat.html">Walikota</a>
          <a class="dropdown-item" href="kandidat.html">Bupati</a>
          <a class="dropdown-item" href="kandidat.html">Partai</a>
        </div>
      </li>
      <li class="nav-item {{ request()->is('berita') ? 'active' : '' }} pr-lg-4">
        <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
      </li>
      <li class="nav-item {{ request()->is('tentangkami') ? 'active' : '' }} pr-lg-4">
        <a class="nav-link" href="tentang_kami.html">Tentang Kami</a>
      </li>
      <li class="nav-item pr-lg-4">
        <a class="nav-link"
          style="background-color: #F6B951; color: #162f50; border-radius: 20px; padding: 10px 25px; display: flex; justify-content: center; align-items: center;"
          href="#">Masuk</a>
      </li>
    </ul>
  </div>
</nav>