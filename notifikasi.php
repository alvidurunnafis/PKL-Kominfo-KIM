<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>STATUS | ARTIKEL</title>
</head>

<body>
    <div class="container" style="margin-top: 10%;">
        <?php
        if (isset($_SESSION['success'])) {
        ?>
            <div class="d-flex justify-content-center py-3">
                <img src="image/success icon.png" alt="">
            </div>
            <div class="text-center">
                <h2 class="text-success text-upper text-uppercase py-2">success</h2>
                <h5 class="mt-5">Login yang anda lakukan <strong class="text-success"> BERHASIL </strong></h5>

                <a href="index.php" class="btn btn-success mt-5" type="button">Beranda</a>
            </div>
        <?php
        } else {
        ?>
            <div class="d-flex justify-content-center py-3">
                <img src="image/failed icon.png" alt="">
            </div>
            <div class="text-center">
                <h2 class="text-danger text-uppercase py-2">Failed</h2>
                <h5 class="mt-5">Login yang anda lakukan <strong class="text-danger"> GAGAL</strong></h5>
                <p>Akun anda sedang kami tinjau, harap ditunggu</p>

                <a href="index.php" class="btn btn-success mt-5" type="button">Beranda</a>
            </div>

        <?php
        }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>