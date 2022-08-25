<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Beranda</title>
</head>
<body class="font-poppins">

  @include('partials.navbar')

    <!-- carousel -->
    <div class="container carousel-contain">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/image/slider1.svg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/image/slider2.svg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/image/slider3.svg" alt="Third slide">
            </div>
          </div>
          <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span aria-hidden="true"><img src="assets/image/Chevron_Left.png" alt=""></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button"
            data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span aria-hidden="true"><img src="assets/image/Chevron_Right.png" alt=""></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- end of carousel -->

    <!-- profile -->
    <div class="container" id="profile">
      <img class="img-fluid" src="assets/image/majalengkafix.svg" id="img-profile" alt="">

    </div>
    <!-- end of profile -->

    <!-- layanan -->
    <div class="container" id="wadah-layanan">
      <div class="container-fluid garis-merah">
      </div>
      <br><br>
      <h2 class="text-center judul">
        LAYANAN MAJALENGKA SABER HOAKS <br><br>
        <div class="container" id="garis2"></div>
      </h2>
      <br>
      <div class="container">
        <div class="row">
          <div class="col col-layanan">
            <div class="bg-image hover-zoom">
              <img class="img-fluid w-100" src="assets/image/LayananAduanLangsung.svg" alt="">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-layanan">
            <img class="img-fluid" src="assets/image/LayananPemantauanRumor.svg" alt="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-layanan">
            <img class="img-fluid" src="assets/image/LayananKlarifikasi.svg" alt="">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col col-layanan">
            <img class="img-fluid" src="assets/image/LayananLiterasi.svg" alt="">
          </div>
        </div>
      </div>

    </div>
    <!-- end of layanan -->
    <br><br>
    <!-- data statistik -->
    <div class="container garis-merah">
    </div>
    
    <BR></BR>
      <!-- Bagian Data -->
    <h2 class="text-center judul">
      DATA STATISTIK ADUAN <br><br>
      <div class="container" id="garis2"></div>
    </h2>
    <div class="container container-data">
      <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="card card-data h-100 justify-content-center">
                    <div>
                      <div class="card-body text-light">
                        <h5 class="card-title text-center judul">Jumlah Aduan</h5>
                        <p class="card-text text-center judul">0</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-auto">
              <div class="card card-data h-100 justify-content-center">
                  <div>
                    <div class="card-body">
                      <h5 class="card-title text-center text-light judul">Ditolak</h5>
                      <p class="card-text text-center text-light judul">0</p>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <br>
      <!-- Bagian Hasil Klarifikasi -->
    <h2 class="text-center judul">
      HASIL KLARIFIKASI <br><br>
      <div class="container" id="garis3"></div>
    </h2>
    <div class="container container-data">
      <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="card card-hasil1 h-100 justify-content-center">
                    <div>
                      <div class="card-body text-light">
                        <h5 class="card-title text-center judul">Benar</h5>
                        <p class="card-text text-center judul">0</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-auto">
              <div class="card card-hasil2 h-100 justify-content-center">
                  <div>
                    <div class="card-body">
                      <h5 class="card-title text-center text-light judul">Hoax</h5>
                      <p class="card-text text-center text-light judul">0</p>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <br>
      <!-- Bagian PERSENTASE -->
    <h2 class="text-center judul">
      PERSENTASE <br><br>
      <div class="container" id="garis2"></div>
    </h2>
    <div class="container container-data">
      <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="card card-hasil1 h-100 justify-content-center">
                    <div>
                      <div class="card-body text-light">
                        <h5 class="card-title text-center judul">Selesai</h5>
                        <p class="card-text text-center judul">0</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-auto">
              <div class="card card-persentase h-100 justify-content-center">
                  <div>
                    <div class="card-body">
                      <h5 class="card-title text-center text-light judul">Dalam Proses</h5>
                      <p class="card-text text-center text-light judul">0</p>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <br><br><br>
  <!-- end of data statistik -->
    <div class="container" id="wadah-grafik">
      <div class="container-fluid garis-merah"></div><br><br>
      <h2 class="text-center judul">
        GRAFIK HOAX YANG TERKONFIRMASI <br><br>
        <div class="container" id="garis2"></div>
      </h2>
      <div class="container grafik border border-danger border-5">
        asd
      </div>
    </div>
    <br><br><br>

    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>