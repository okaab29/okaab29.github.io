<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleBerita.css">
    <title>Berita</title>
</head>
<body>
    @include('partials.navbar')

    <!-- Konten -->
    <div class="container font-poppins">
        <h3 id="judul-layanan">
            Berita
            <div class="container border border-danger garis-judul"></div>
        </h3>

        <div class="container">

            <div class="container pt-3 card-animate">
                <div class="card mb-3 pt-3" style="max-width: 1100px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="assets/image/berita/kecelakaan-ciamis.jpeg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">TRAGIS! 8 ORANG MENINGGAL AKIBAT KECELAKAAN MOBIL PICKUP</h5>
                          <p class="card-text">Insiden kecelakaan sebuah unit mobil bak terbuka yang mengangkut 17 orang dari wilayah Jatiwangi, Kabupaten Majalengka, Jawa Barat. Mobil pickup tersebut terjun ke dalam jurang sedalam 30 meter.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="container pt-3 card-animate">
                <div class="card mb-3 pt-3" style="max-width: 1100px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="assets/image/berita/rokok-ilegal.jpg" class="img-fluid rounded-start mb-4" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">SEBANYAK 8 RIBU LEBIH ROKOK ILEGAL DISITA!!</h5>
                          <p class="card-text">Bea Cukai dan Satpol PP menyita sebanyak 8.500 batang rokok ilegal berbegai merek yang beredar di wilayah Kabupaten Majalengka. Rokok ilegal ini beredar luas tanpa ada segel cukai di kemasannya.</p>
                          <p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

        </div>
    </div>

    <!-- Konten -->

      @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>