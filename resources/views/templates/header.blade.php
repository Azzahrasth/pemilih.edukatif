<nav class="navbar navbar-expand-lg poppins-bold" style="background-color: #162f50;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('storage/images/Logo.png') }}" alt="Logo PeLif" class="img-fluid" style="width: 141px" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item pe-lg-4">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item {{ request()->is('kandidat') ? 'active' : '' }} dropdown pe-lg-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kandidat
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/paslon') }}">Pasangan Calon</a>
            <a class="dropdown-item" href="{{ url('/kandidat') }}">Cagub & Cawagub</a>
            <a class="dropdown-item" href="{{ url('/kategorisasi') }}">Visi Misi</a>
            <a class="dropdown-item" href="{{ url('/partai') }}">Partai </a>
          </div>
        </li>
        <li class="nav-item pe-lg-4">
          <a class="nav-link {{ request()->is('berita') || request()->is('berita/*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a>
        </li>
        <li class="nav-item pe-lg-4">
          <a class="nav-link {{ request()->is('tentangkami') ? 'active' : '' }}" href="{{ url('/tentangkami') }}">Tentang Kami</a>
        </li>
        <li class="nav-item pe-lg-4">
          @if(Auth::check())
          <a class="nav-link"
            style="background-color: #F6B951; color: #162f50; border-radius: 20px; padding: 10px 25px; display: flex; justify-content: center; align-items: center;"
            href="{{ route('actionlogout') }}">Logout</a>
          @else
          <a class="nav-link"
            style="background-color: #F6B951; color: #162f50; border-radius: 20px; padding: 10px 25px; display: flex; justify-content: center; align-items: center;"
            href="{{ route('login') }}">Masuk</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>