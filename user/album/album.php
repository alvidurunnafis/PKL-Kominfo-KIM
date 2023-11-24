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
                                <a class="dropdown-item" href="../berita/artikel-user.php">Artikel</a>
                                <a class="dropdown-item" href="../berita/pengumuman-user.php">Pengumuman</a>
                                <a class="dropdown-item" href="../berita/myposts.php">My Post</a>
                            </div>
                        </li>
                        <li class="nav-item active px-3">
                            <a class="nav-link" href="album.php">Album KegiatanN</a>
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
    </header>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="../../index.php">Beranda</a></li>
                    <li> <a href="album.php">Album</a></li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Artikel Section ======= -->
        <section id="artikel" class="artikel">
            <div class="container">
                <h2>Album Kegiatan</h2>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi-2.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>10 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-01-01">Jan 1, 2020</time></span></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>3 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-02-01">Feb 1, 2020</time></span></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi-2.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>6 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-01-01">Jan 1, 2020</time></span></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>3 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-02-01">Feb 1, 2020</time></span></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi-2.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>6 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-01-01">Jan 1, 2020</time></span></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="artikel-box">
                            <img src="../../image/sosialisasi.jpeg" alt="" class="img-fluid">
                            <h4><a href="">KIM Kabupaten Dampit</a></h4>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-images"></i><span>3 Photos</span></li>
                                    <li class="d-flex align-items-center"><i class="fa-regular fa-calendar-days"></i><span><time datetime="2020-02-01">Feb 1, 2020</time></span></li>
                                </ul>
                            </div>

                            <div class="entry-content">

                                <div class="read-more">
                                    <a href="album_detail.php">See Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- PAGINATION -->
        <section id="page" class="page">
            <div class="container">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a href="#" class="page-link" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
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

</body>

</html>