<?php
include '../../koneksi.php';
session_start();

$sql = "SELECT * FROM profil_kim WHERE Id_Profil_KIM = 2";
$hasil = $koneksi->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase" style="background-color: #5DE282;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../../image/logo kecil.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mx-auto"></div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="../../index.php">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown active px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PROFIL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view-dasarhukum.php">Dasar Hukum</a>
                            <a class="dropdown-item" href="view-pengertian.php">Pengertian KIM</a>
                            <a class="dropdown-item" href="view-tupoksi.php">Tugas Pokok dan Fungsi KIM</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BERITA
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../berita/artikel.php">ARTIKEL</a>
                            <a class="dropdown-item" href="../berita/pengumuman.php">PENGUMUMAN</a>
                        </div>
                    </li>
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="../album/album.php">ALBUM KEGIATAN</a>
                    </li>
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="#kontak">KONTAK</a>
                    </li>
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="../../login-baru.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="../../index.php">Beranda</a></li>
                    <li>Profil</li>
                    <li>Pengertian KIM</li>
                </ol>
            </div>
        </section>

        <?php
        foreach ($hasil as $value) {
        ?>
            <div class="container">
                <div class="card my-5">
                    <h5 class="card-header"><?= $value['Nama_Profil'] ?></h5>
                    <div class="card-body" style="text-justify: newspaper;">
                        <p><?= $value['Isi_Profil_KIM'] ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </main>


    <footer class="page-footer pt-4 text-light" style="font-size: 12px; background-color: #5DE282; border-radius: 100% 100% 0 0;" id="kontak">
        <div class="container text-md-left mt-4">
            <div class="row mt-5 pt-5">
                <div class="col">
                    <p class="text-uppercase">Kontak Kami-KIM Kab. Malang</p>
                </div>
                <div class="col">
                    <p class="text-uppercase">statistik web</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        Alamat<br>
                        Jl. A.Yani Utara No. 384 B Kepanjen, Malang
                    </p>
                </div>
                <div class="col">
                    <p>
                        Telp : 0341408788 <br>
                        E-mail : KOMINFO@MALANGKAB.GO.ID
                    </p>
                </div>
                <div class="col">
                    <p class="text-uppercase">Pengunjung hari ini : <?= $round = rand(1, 10000) ?></p>
                </div>
                <div class="col">
                    <p class="text-uppercase">total kunjungan : <?= $round = rand(1, 10000) ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="footer-copyright my-5">
                        <p>
                            © 2020 Copyright:
                            <a href="/" class="text-light"> Dinas Komunikasi dan Informasi Kabupaten Malang 2022</a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="row my-5">
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="../../image/facebook.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="../../image/instagram.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="../../image/twitter.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="../../image/youtube.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>