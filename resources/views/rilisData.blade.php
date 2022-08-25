<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleRilisData.css">
    <title>Rilis Data</title>
</head>
<body class="font-poppins">
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
              <a class="nav-link dropdown-toggle text-pilihan menu-layanan" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
              <ul class="dropdown-menu menu-drop text-light">
                <li><a class="dropdown-item text-light pilihan-drop" href="materi">Materi</a></li>
                <li><a class="dropdown-item text-light pilihan-drop menu-layanan" href="rilisData">Rilis Data</a></li>
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

    <!-- Materi -->
    <div class="container">
        <h3 id="judul-layanan">
            RILIS DATA
            <div class="container border border-danger garis-judul"></div>
        </h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Analisa Media Sosial Instagram Majalengka Saber Hoaks
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div>
                        01 - Analisa Media Sosial Instagram Majalengka Saber Hoaks Bulan Agustus 2022
                        <button class="btn btn-lihat">
                            Lihat
                        </button>
                    </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed acc2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Kompilasi Hoaks Tahun
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div>
                        Kompilasi Hoaks Tahun 2022
                        <button class="btn btn-lihat">
                            Lihat
                        </button>
                    </div>               
                </div>
                <div class="accordion-body">
                    <div>
                        Kompilasi Hoaks Tahun 2023
                        <button class="btn btn-lihat">
                            Lihat
                        </button>
                    </div>               
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- Materi -->

    @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>