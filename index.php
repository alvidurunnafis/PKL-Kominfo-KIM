<?php
session_start();
include 'koneksi.php';
$sql_artikel = "SELECT artikel.Id_Artikel, artikel.Judul_Artikel, artikel.Isi_Artikel, artikel.Tanggal, artikel.Tema, artikel.Gambar, artikel.Status, profil.Nama_KIM FROM artikel, profil WHERE artikel.Penulis = profil.Id_Profil";
$hasil_artikel = $koneksi->query($sql_artikel);
$data_artikel = mysqli_fetch_array($hasil_artikel);

$sql_pengumuman = "SELECT * FROM pengumuman";
$hasil_pengumuman = $koneksi->query($sql_pengumuman);
$data_pengumuman = mysqli_fetch_array($hasil_pengumuman);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>BERANDA | KIM</title>
</head>

<body>
    <!-- Navigasi -->
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-uppercase">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="image/logo kecil.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                if (isset($_SESSION['level'])) {
                    if ($_SESSION['level'] == 'anggota') {
                ?>
                        <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                            <div class="mx-auto"></div>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active px-3">
                                    <a class="nav-link" href="index.php">BERANDA</a>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BERITA
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="user/berita/artikel-user.php">Artikel</a>
                                        <a class="dropdown-item" href="user/berita/pengumuman-user.php">Pengumuman</a>
                                        <a class="dropdown-item" href="user/berita/myposts.php">My Post</a>
                                    </div>
                                </li>
                                <li class="nav-item active px-3">
                                    <a class="nav-link" href="user/album/album.php">Album KegiatanN</a>
                                </li>
                                <li class="nav-item active px-3">
                                    <a class="nav-link" href="#kontak">Kontak</a>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        HALO USER
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pemberitahuan-user">Pemberitahuan</a>
                                        <a class="dropdown-item" href="user/profil/view-profile.php">Edit Profil</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php
                    } elseif ($_SESSION['level'] == 'admin') {
                    ?>
                        <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                            <div class="mx-auto"></div>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active px-3">
                                    <a class="nav-link" href="index.php">BERANDA</a>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        PROFIL
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="admin/profil/view-dasarhukum.php">Dasar Hukum</a>
                                        <a class="dropdown-item" href="admin/profil/view-pengertian.php">Pengertian KIM</a>
                                        <a class="dropdown-item" href="admin/profil/view-tupoksi.php">Tugas Pokok dan Fungsi KIM</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        BERITA
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="admin/berita/artikel-admin.php">ARTIKEL</a>
                                        <a class="dropdown-item" href="admin/berita/pengumuman-admin.php">PENGUMUMAN</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        DATA KIM
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="admin/data/album.php">ALBUM KEGIATAN</a>
                                        <a class="dropdown-item" href="admin/data/data.php">DATA KIM</a>
                                        <a class="dropdown-item" href="admin/data/arsip-artikel.php">ARSIP ARTIKEL</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown active px-3">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        HALO ADMIN
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pemberitahuan-admin">Pemberitahuan</a>
                                        <a class="dropdown-item" href="admin/edit_profil.php">EDIT PROFIL</a>
                                        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="index.php">BERANDA</a>
                            </li>
                            <li class="nav-item dropdown active px-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PROFIL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="guest/profil/view-dasarhukum.php">Dasar Hukum</a>
                                    <a class="dropdown-item" href="guest/profil/view-pengertian.php">Pengertian KIM</a>
                                    <a class="dropdown-item" href="guest/profil/view-tupoksi.php">Tugas Pokok dan Fungsi KIM</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown active px-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    BERITA
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="guest/berita/artikel.php">ARTIKEL</a>
                                    <a class="dropdown-item" href="guest/berita/pengumuman.php">PENGUMUMAN</a>
                                </div>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="guest/album/album.php">ALBUM KEGIATAN</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="#kontak">KONTAK</a>
                            </li>
                            <li class="nav-item active px-3">
                                <a class="nav-link" href="login-baru.php">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        </nav>

        <!-- mask -->
        <div class="view" id="intro">
            <div class="full-bg-image">
                <div class="content text-center" id="headline">
                    <h4 class="text-white">SELAMAT DATANG DI SITUS RESMI</h4>
                    <h1 class="text-white">KIM KABUPATEN MALANG</h1>
                    <button type="button" class="btn btn-outline-light my-3" data-toggle="modal" data-target="#ModalCariBerita">Cari berita di sini</button>
                </div>
            </div>
        </div>
    </header>

    <!-- konten -->
    <main class="my-5 py-5">
        <div class="container">
            <div class="berita">
                <div class="header">
                    <div class="row gy-0">
                        <div class="col-2">
                            <button type="button" class="btn btn-outline-success tombol">Berita Terbaru</button>
                        </div>
                        <div class="col-10 align-self-center">
                            <!-- <hr> -->
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row gy-2">
                        <?php
                        foreach ($hasil_artikel as $value) {
                        ?>
                            <div class="col-md-3 my-3">
                                <a href="" style="text-decoration: none;">
                                    <div class="card text-center" style="border:0px">
                                        <img class="card-img-top" src="file/gallery/<?= $value['Gambar'] ?>" alt="Card image cap" style="border-radius: 17px 17px 0 0;">
                                        <div class="card-body" style="border-radius: 0px 0px 17px 17px; background-color:#D9D9D9;">
                                            <h5 class="card-title text-success"><?= substr($value['Judul_Artikel'], 0, 50) ?>....</h5>
                                            <p class="card-text text-dark" style="font-size: 12px;"><?= $value['Nama_KIM'] . ' - ' . $value['Tanggal'] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="row gy-3 my-5">
                <div class="artikel col-7">
                    <div class="header">
                        <div class="row gy-1">
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-success tombol">Galeri</button>
                            </div>
                            <div class="col-10 align-self-center">
                                <!-- <hr> -->
                            </div>
                        </div>
                    </div>
                    <div class="isi">
                        <div class="row gy-2">
                            <?php
                            for ($i = 0; $i < 6; $i++) {
                            ?>
                                <div class="col-md-4 my-3">
                                    <a href="" style="text-decoration: none;">
                                        <div class="card text-center p-0" style="border-radius: 17px; font-size: 12px; border:0px">
                                            <img class="card-img-top" src="image/poto 2.png" alt="Card image cap">
                                            <div class="card-body" style="border-radius: 0px 0px 17px 17px; background-color:#D9D9D9;">
                                                <p class="card-text text-dark" style="font-size: 10px;">Malang - diskomindo malang</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="pengumuman col">
                    <div class="header">
                        <div class="row gy-0">
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-success tombol">Pengumuman</button>
                            </div>
                            <div class="col-10 align-self-center">
                                <!-- <hr> -->
                            </div>
                        </div>
                    </div>
                    <div class="isi m-3">
                        <?php
                        foreach ($hasil_pengumuman as $value) {
                        ?>
                            <div class="row gy-2">
                                <div class="col-2">
                                    <a href="">
                                        <img src="image/corong.png" alt="" class="w-70 h-60">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="" class="text-dark">
                                        <p><?= $value['Judul_Pengumuman'] ?><br>
                                        <?= strip_tags(substr($value['Isi_Pengumuman'], 0, 100)) ?></p>
                                    </a>
                                </div>

                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="page-footer pt-4 text-light" style="font-size: 12px; background-color: #5DE282;" id="kontak">
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
                            <a href=""><img src="image/facebook.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="image/instagram.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="image/twitter.png" alt=""></a>
                        </div>
                        <div class="col-sm-1 mx-2">
                            <a href=""><img src="image/youtube.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Modal -->
    <!-- search modal -->
    <div class="modal fade modal-fullscreen" id="ModalCariBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Cari Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h2 class="text-center">Cari Berita di sini</h2>
                        <form action="">
                            <div class="form-row my-5">
                                <div class="col-10">
                                    <input class="form-control form-control-lg" type="text" placeholder="Ketikan Judul...">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2 px-5 btn-lg">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
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
                    <a type="button" class="btn btn-primary" href="php/aksi_logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- notifikasi modal -->
    <!-- Admin -->
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
                                        <img src="image/user.png" alt="user">
                                    </div>
                                    <div class="col">
                                        <h4 class="" style="font-size: 18px ;"><strong>KIM DAMPIT</strong> request to post an article</h4>
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

    <!-- User -->
    <div class="modal fade" id="pemberitahuan-user" tabindex="-1" role="dialog" aria-labelledby="pemberitahuan-userTitle" aria-hidden="true">
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
                        <div class="row mt-3 py-2 card-user border shadow bg-white rounded">
                            <div class="col-1">
                                <img src="image/user.png" alt="user">
                            </div>
                            <div class="col">
                                <h4 class="" style="font-size: 18px ;"><strong>Your Artikel :</strong> Mengamanankan covid di desa dengan cara sederhana</h4>
                                <p style="font-size: 14px;">Status <strong class="text-success">Diterima</strong></p>
                                <div class="row justify-content-between">
                                    <div class="col-8">
                                        <a href="" class="btn btn-success btn-sm">Lihat</a>
                                    </div>
                                    <div class="col-4">
                                        <p>Hari ini Pukul 10.20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 py-2 card-user border shadow bg-white rounded">
                            <div class="col-1">
                                <img src="image/user.png" alt="user">
                            </div>
                            <div class="col">
                                <h4 class="" style="font-size: 18px ;"><strong>Your Artikel :</strong> Mengamanankan covid di desa dengan cara sederhana</h4>
                                <p style="font-size: 14px;">Status <strong class="text-danger">Ditolak</strong></p>
                                <div class="row justify-content-between">
                                    <div class="col-8">
                                        <a href="" class="btn btn-success btn-sm">Lihat</a>
                                    </div>
                                    <div class="col-4">
                                        <p>Hari ini Pukul 10.20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 py-2 card-user border shadow bg-white rounded">
                            <div class="col-1">
                                <img src="image/user.png" alt="user">
                            </div>
                            <div class="col">
                                <h4 class="" style="font-size: 18px ;"><strong>Your Artikel :</strong> Mengamanankan covid di desa dengan cara sederhana</h4>
                                <p style="font-size: 14px;">Status <strong class="text-warning">Menunggu</strong></p>
                                <div class="row justify-content-between">
                                    <div class="col-8">
                                        <a href="" class="btn btn-success btn-sm">Lihat</a>
                                    </div>
                                    <div class="col-4">
                                        <p>Hari ini Pukul 10.20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.style.backgroundColor = '#5DE282';
            } else {
                nav.style.backgroundColor = '';
            }
        });
    </script>
</body>

</html>