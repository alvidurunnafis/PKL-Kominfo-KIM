<?php
include '../../koneksi.php';
session_start();

$id_data = $_GET['id'];
$sql = "SELECT * FROM galeri WHERE Id_Profil = $id_data";
$hasil = $koneksi->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIM Kab Malang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header>
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
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PROFIL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../profil/view-dasarhukum.php">Dasar Hukum</a>
                                <a class="dropdown-item" href="../profil/view-pengertian.php">Pengertian KIM</a>
                                <a class="dropdown-item" href="../profil/view-tupoksi.php">Tugas Pokok dan Fungsi KIM</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active px-3">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                BERITA
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../berita/artikel-admin.php">Artikel</a>
                                <a class="dropdown-item" href="../berita/pengumuman-admin.php">Pengumuman</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active px-3">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                DATA KIM
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="album.php">Album Kegiatan</a>
                                <a class="dropdown-item" href="data.php">Data KIM</a>
                                <a class="dropdown-item" href="arsip-artikel.php">Arsip Artikel</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active px-3">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                HALO ADMIN
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pemberitahuan-admin">Pemberitahuan</a>
                                <a class="dropdown-item" href="../edit_profil.php">Edit Profil</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="../../index.php">Beranda</a></li>
                    <li>Data KIM</li>
                    <li><a href="album.php">Album</a></li>
                    <li>Detail</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <?php
                    $sql = "SELECT * FROM galeri WHERE Pemilik = $id_data";
                    $hasil_gambar = $koneksi->query($sql);
                    foreach ($hasil_gambar as $value) { ?>

                        <div class="col-xl-3 col-lg-4 col-md-6 my-4">
                            <div class="gallery-item h-100">
                                <img src="../../file/gallery/<?= $value['Nama_File'] ?>" class="img-fluid" alt="">
                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                    <a href="../../file/gallery/<?= $value['Nama_File'] ?>" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                    <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Gallery Item -->
                    <?php } ?>
                </div>

            </div>
        </section><!-- End Gallery Section -->
    </main><!-- End #main -->

    <footer class="page-footer pt-4 text-light" style="font-size: 12px; background-color: #5DE282; border-radius: 100% 100% 0 0;">
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

    <!-- logout modal -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">LOGOUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin untuk LOGOUT?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-primary" href="../../php/aksi_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Pemberitahuan Admin -->
    <div class="modal fade" id="pemberitahuan-admin" tabindex="-1" role="dialog" aria-labelledby="pemberitahuan-adminTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <?php for ($i = 0; $i < 10; $i++) {
                        ?>
                            <a href="" class="text-dark">
                                <div class="row mt-3 py-2 card-user border shadow bg-white rounded">
                                    <div class="col-1">
                                        <img src="../../image/user.png" alt="user">
                                    </div>
                                    <div class="col">
                                        <h4 class="" style="font-size: 18px ;"><strong>KIM DAMPIT </strong>request to post an article</h4>
                                        <p style="font-size: 14px;"><strong>Judul : </strong>Mengamanankan covid di desa dengan cara sederhana</p>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <a href="" class="btn btn-success btn-sm">Accept</a>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="" class="btn btn-success btn-sm">Accept</a>
                                                    </div>
                                                    <div class="col-3">
                                                        <a href="" class="btn btn-success btn-sm">Accept</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <p>Hari ini Pukul 10.20</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>