<link rel="stylesheet" href="../css/styleLayout/navbarAdmin2.css">


    <!-- Navbar -->
    <div class="container-fluid contain-nav fixed-top font-poppins">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-left py-3 mb-2">
          <a href="/admin/login" class="d-flex col-md-3 mb-0 mb-md-0 text-dark text-decoration-none">
            <img src="../assets/image/logo-navbar.png" alt="">
          </a>

          <ul class="nav col-10 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="main" class="nav-link px-3 text-pilihan {{ ($tittle === "About") ? 'menu-layanan' : "" }}">About</a></li>
            <li><a href="layanan" class="nav-link px-2 text-pilihan">Statistik Aduan</a></li>
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

          <div class="col-md-3 bell">
            <img src="../assets/image/adminImg/bell.png" alt="" class="img-bell">
          </div>

          <div class="col-md-3 profile">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
              <span class="mr-0 d-none d-lg-inline nama-profile">Valerie Luna</span>
              <img class="img-profile rounded-circle" src="../assets/image/adminImg/profil-admin.png">
            </a>
  
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="../admin/profile">
                <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Panel Admin
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </div>

          
        </header>
    </div>

    <div class="container-fluid penutup">
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>