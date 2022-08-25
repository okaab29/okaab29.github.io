<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminStyle/loginAdmin.css">
    <title>Admin | Login</title>
</head>
<body>
    @include('partials.navbarAdmin')

    <!-- Container Login -->

    <div class="container cont-login mt-5">
        <div class="row">
            <div class="col">
                <img class="img-fluid mshProfile" src="../assets/image/adminImg/mshProfile.svg" alt="">
            </div>
            <div class="col">
                <form>
                    <div class="container-fluid border text-login mt-5">
                        <label for="" class="form-label">Login</label>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username / E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="container btn-login">
                      <button type="submit" class="btn tombol-login">Masuk</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>

    <!-- Container Login -->


    <!-- Footer -->

    @include('partials.footerAdmin')

    <!-- Footer -->
</body>
</html>