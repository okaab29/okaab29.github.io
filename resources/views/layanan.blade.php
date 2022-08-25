<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleLayanan.css">
    <title>Layanan</title>
</head>
<body>
    @include('partials.navbar')

    <!-- Form Layanan Aduan -->

    <div class="container body-layanan font-poppins">
      <h3 id="judul-layanan">
        Layanan Aduan
        <div class="container border border-danger garis-judul"></div>
      </h3>
      <br><br><br><br>
      <div class="container">
        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan">Nama Lengkap</p>
          </div>
          <div class="col pt-3">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan">Nomor Handphone</p>
          </div>
          <div class="col pt-3">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Nomor Handphone" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan">Email</p>
          </div>
          <div class="col pt-3">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 pt-3">
            <p class="text-layanan">Kelamin</p>
          </div>
          <div class="col-6 pt-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan">Pertanyaan</p>
          </div>
          <div class="col pt-3 mb-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Pertanyaan</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan">Bukti Aduan Material</p>
          </div>
          <div class="col pt-3">
            <div class="input-group mb-0">
              <input type="file" class="form-control" id="inputGroupFile02">
            </div>
            <label for="formFile" class="form-label mb-2">format hanya mendukung PNG / JPG / JPEG / GIF, maximal ukuran 2MB.</label>
          </div>
        </div>

        <div class="row">
          <div class="col pt-3">
            <p class="text-layanan mb-0">Sumber (alamat link, situs jika ada)</p>
            <label for="formFile" class="form-label mb-2">sumber berita ini akan membantu kami dalam proses klarifikasi.</label>
          </div>
          
          <div class="col pt-3">
            <div class="form-floating mb-2">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Sumber</label>
            </div>
          </div>
        </div>

      </div>

      <div class="container">
      <button type="button" class="btn btn-upload">Ajukan Aduan</button>
      </div>
      <br><br><br>
    </div>

    <!-- Form Layanan Aduan -->
    @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>