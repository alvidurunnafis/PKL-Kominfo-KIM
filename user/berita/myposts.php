<?php
include '../../koneksi.php';
session_start();

if (!isset($_SESSION['level'])) {
    echo "<script>
        alert('Login Terlebih Dahulu');
        history.back();
    </script>";
    die;
}

$user = $_SESSION['id'];
$sql_profil = "SELECT Id_Profil FROM profil WHERE Id_Account = $user";
$hasil_profil = $koneksi->query($sql_profil);
$id_profil = mysqli_fetch_array($hasil_profil);

$id_profil2 = $id_profil['Id_Profil'];

$sql = "SELECT artikel.Id_Artikel, artikel.Judul_Artikel, artikel.Isi_Artikel, artikel.Tanggal, artikel.Tema, artikel.Gambar, artikel.`Status`, profil.Nama_KIM, artikel.Penulis FROM artikel, profil WHERE artikel.Penulis = profil.Id_Profil AND Penulis = $id_profil2";
$hasil = $koneksi->query($sql);
$data = mysqli_fetch_array($hasil);


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

    <title>KIM Kab Malang</title>
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
                    <li>Berita</li>
                    <li>My Posts</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= My Posts Section ======= -->
        <section id="my-posts" class="my-posts">
            <div class="container">
                <h2>My Posts</h2>
                <p>Melalui laman ini, Anda dapat mengunggah artikel dan melihat semua artikel yang telah dipost.</p>

                <div class="row justify-content-between">

                    <!-- NEW POST -->
                    <div class="col-auto">
                        <div class="new-post">
                            <a href="new-post.php">New Post</a>
                        </div>
                    </div>

                    <!-- SEARCH -->
                    <div class="col-auto">
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text" placeholder="Ketikkan kata kunci">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Jenis Artikel</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 10;
                        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $jumlah_data = mysqli_num_rows($hasil);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $data_artikel = mysqli_query($koneksi, "SELECT artikel.Id_Artikel, artikel.Judul_Artikel, artikel.Isi_Artikel, artikel.Tanggal, artikel.Tema, artikel.Gambar, artikel.`Status`, profil.Nama_KIM, artikel.Penulis FROM artikel, profil WHERE artikel.Penulis = profil.Id_Profil AND Penulis = $id_profil2 limit $halaman_awal, $batas");
                        $nomor = $halaman_awal + 1;
                        while ($d = mysqli_fetch_array($data_artikel)) { ?>

                            <tr>
                                <th scope="row"><?= $nomor++ ?></th>
                                <td><img src="../../file/gallery/<?= $d['Gambar'] ?>" alt=""></td>
                                <td><?= $d['Judul_Artikel'] ?></td>
                                <td><?= $d['Tema'] ?></td>
                                <td><?= $d['Tanggal'] ?></td>
                                <td><?= $d['Status'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>


            </div>
        </section>
        <!-- End Services Section -->

        <!-- PAGINATION -->
        <section id="page" class="page">
            <div class="container">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" aria-label="Previous" <?php if ($halaman > 1) {
                                                                                            echo "href='?halaman=$previous'";
                                                                                        } ?>><span aria-hidden="true">&laquo;</span></a></li>

                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) { ?>
                        <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php } ?>

                    <li class="page-item"><a class="page-link" aria-label="Next" <?php if ($halaman < $total_halaman) {
                                                                                        echo "href='?halaman=$next'";
                                                                                    } ?>><span aria-hidden="true">&raquo;</span></a></li>
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


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->


</body>

</html>