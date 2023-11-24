<?php
session_start();
include '../../koneksi.php';
$id_user = $_SESSION['id'];
$sql = "SELECT Id_Profil FROM profil WHERE Id_Account = $id_user";
$hasil = $koneksi->query($sql);

foreach ($hasil as $value) {
    $id_profil = $value;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../../css/style.css">

    <title>NEW POST ARTIKEL | KIM</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase" style="background-color: #5DE282;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../../image/logo kecil.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                <div class="mx-auto"></div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="../../index.php">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown active px-3">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BERITA
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="artikel-user.php">Artikel</a>
                            <a class="dropdown-item" href="pengumuman-user.php">Pengumuman</a>
                            <a class="dropdown-item" href="myposts.php">My Post</a>
                        </div>
                    </li>
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="../album/album.php">Album KegiatanN</a>
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
                            <a class="dropdown-item" href="../profil/view-profile.php">Edit Profil</a>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="">Berita</a></li>
                    <li><a href="myposts.php">My Post</a></li>
                    <li>New Post</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= New Post Section ======= -->
        <section id="new-post" class="new-post">
            <div class="container">
                <h2>New Post</h2>
                <form action="../../php/insert-artikel.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $id_profil['Id_Profil'] ?>" name="nama-kim">
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text" class="form-control" id="judul-artikel" name="judul-artikel" placeholder="Masukkan Judul Artikel" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Artikel</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="tema-artikel" required>
                            <option>- Pilih Tema -</option>
                            <option value="Pariwisata">Pariwisata</option>
                            <option value="Pemerintahan">Pemerintahan</option>
                            <option value="Sosial Budaya">Sosial Budaya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Isi Artikel</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="isi-artikel" rows="8" placeholder="Masukkan Isi Artikel" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Gambar</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto-artikel" required>
                    </div>

                    <button type="submit" name="submit">Post</button>
                    <button type="button" onclick="history.back()">Cancel</button>
                </form>

            </div>
        </section>
        <!-- End Services Section -->

    </main>
    <!-- End #main -->


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

    <!-- Modal Notifikasi User -->
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
                                <img src="../../image/user.png" alt="user">
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
                                <img src="../../image/user.png" alt="user">
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
                                <img src="../../image/user.png" alt="user">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../../ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('isi-artikel');
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->



</body>

</html>