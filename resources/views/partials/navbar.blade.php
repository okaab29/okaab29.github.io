<link rel="stylesheet" href="../css/styleLayout/navbar.css">

<!-- Navbar -->
<div class="container-fluid contain-nav fixed-top font-poppins">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-left py-3 mb-2">
      <a href="/main" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/image/logo-navbar.png" alt="">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="main" class="nav-link px-2 text-pilihan {{ ($tittle === "Beranda") ? 'menu-layanan' : "" }}">Beranda</a></li>
        <li><a href="layanan" class="nav-link px-2 text-pilihan {{ ($tittle === "Layanan") ? 'menu-layanan' : "" }}">Layanan</a></li>
        <li><a href="berita" class="nav-link px-2 text-pilihan {{ ($tittle === "Berita") ? 'menu-layanan' : "" }}">Berita</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-pilihan" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
            <ul class="dropdown-menu menu-drop text-light">
              <li><a class="dropdown-item text-light pilihan-drop" href="materi">Materi</a></li>
              <li><a class="dropdown-item text-light pilihan-drop" href="rilisData">Rilis Data</a></li>
              <li><a class="dropdown-item text-light pilihan-drop" href="survei">Survei</a></li>
            </ul>
        </li>
        <li><a href="kontak" class="nav-link px-2 text-pilihan {{ ($tittle === "Kontak") ? 'menu-layanan' : "" }}">Kontak</a></li>
        <li><a href="faq" class="nav-link px-2 text-pilihan {{ ($tittle === "FAQ") ? 'menu-layanan' : "" }}">FAQ</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <form class="d-flex form-search" role="search">
            <input class="form-control me-2 mx-auto input-form" type="search" placeholder="Lacak Aduan" aria-label="Search">
            <button id="search-button" type="button" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 20">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
        </form>
      </div>
    </header>
</div>

<!-- Navbar -->
<div class="container-fluid penutup">
</div>