<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/login.css">

    <title>LOGIN | USER</title>
</head>

<body>
    <div class="row">
        <div class="col">
            <div class="view" id="intro">
                <div class="full-bg-image">
                    <div class="content text-center" id="headline">
                        <img src="image/logo besar.png" alt="Logo Kab Malang">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="p-5">
                <h4 class="text-uppercase font-weight-bold mt-3" style="color: #2A9D4A ;">SELAMAT DATANG</h4>
                <h4>Silahkan Masuk Untuk Melanjutkan</h4>

                <form action="php/aksi_login.php" class="mt-3 py-5 pr-5" method="POST">
                    <input name="username" class="form-control form-control-lg my-5 input" type="text" placeholder="Masukkan username anda...." style="text-align: center;">
                    <input name="password" class="form-control form-control-lg my-5 input" type="password" placeholder="Masukkan password" style="text-align: center;">
                    <button type="submit" class="btn btn-success btn-lg btn-block tombol text-uppercase">login</button>
                    <a href="index.php" class="btn btn-outline-success btn-lg btn-block tombol text-uppercase" role="button" aria-pressed="true">kembali</a>
                </form>
            </div>
            <div class="footer-copyright my-4 text-center">
                <p>
                    © 2020 Copyright:
                    <a href="index.php" class="text-dark"> Dinas Komunikasi dan Informasi Kabupaten Malang 2022</a>
                </p>
            </div>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>