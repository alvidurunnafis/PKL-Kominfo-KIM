<?php
include '../../koneksi.php';
session_start();

$user = $_SESSION['id'];
$sql = "SELECT * FROM profil WHERE Id_Account = $user";
$hasil = $koneksi->query($sql);

foreach ($hasil as $value) {
    $id_profil = $value['Id_Profil'];
    $fp = $value['Foto_Profil'];
    $nama_kim = $value['Nama_KIM'];
    $alamat = $value['Alamat'];
    $desa = $value['Desa'];
    $kecamatan = $value['Kecamatan'];
    $tanggal_berdiri = $value['Tanggal_Berdiri'];
    $email = $value['Email'];
    $no_telephon = $value['No_Telephon'];
    $so = $value['Struktur_Organisasi'];
    $sk = $value['Surat_Keputusan'];
    $link_youtube = $value['Link_Youtube'];
    $link_video1 = $value['Link_Video1'];
    $link_video2 = $value['Link_Video2'];
    $link_video3 = $value['Link_Video3'];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
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
                            <a class="dropdown-item" href="view-profile.php">Edit Profil</a>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="../../index.php">Beranda</a></li>
                    <li><a href="view-profile.php">Profil</a></li>
                    <li>Edit</li>
                </ol>
            </div>
        </section>

        <section id="my-posts" class="my-posts">
            <div class="container">
                <div class="row justify-content-left">
                    <h2>Edit Profile</h2>
                    <form action="../../php/update-profil.php" method="POST" enctype="multipart/form-data" name="formprofil">
                        <input type="hidden" name="id_prodil" value="<?= $id_profil ?>">
                        <input type="hidden" name="FP_lama" value="<?= $fp ?>">
                        <input type="hidden" name="SO_lama" value="<?= $so ?>">
                        <input type="hidden" name="SK_lama" value="<?= $sk ?>">
                        <div class="row mb-3">
                            <label for="inputFile" class="col-sm-2 col-form-label">Foto Profil</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="foto-profil" aria-label="file example">
                                <div class="invalid-feedback">Mohon Data di isi dulu.</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">Nama KIM</label>
                            <div class="col-sm-10">
                                <input type="nama" class="form-control" id="inputnama" name="nama-kim" value="<?= $nama_kim ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control text-left" id="inputAlamat" name="alamat" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"><?= $alamat ?></textarea>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="kecamatan" onChange="selectdesa()">
                                            <option>Pilih Kecamatan</option>
                                            <option class="kecamatan" value="Ampelgading">Ampelgading</option>
                                            <option class="kecamatan" value="Bantur">Bantur</option>
                                            <option class="kecamatan" value="Bululawang">Bululawang</option>
                                            <option class="kecamatan" value="Dampit">Dampit</option>
                                            <option class="kecamatan" value="Dau">Dau</option>
                                            <option class="kecamatan" value="Donomulyo">Donomulyo</option>
                                            <option class="kecamatan" value="Gedangan">Gedangan</option>
                                            <option class="kecamatan" value="Gondanglegi">Gondanglegi</option>
                                            <option class="kecamatan" value="Jabung">Jabung</option>
                                            <option class="kecamatan" value="Kalipare">Kalipare</option>
                                            <option class="kecamatan" value="Karangploso">Karangploso</option>
                                            <option class="kecamatan" value="Kasembon">Kasembon</option>
                                            <option class="kecamatan" value="Kepanjen">Kepanjen</option>
                                            <option class="kecamatan" value="Kromengan">Kromengan</option>
                                            <option class="kecamatan" value="Lawang">Lawang</option>
                                            <option class="kecamatan" value="Ngajum">Ngajum</option>
                                            <option class="kecamatan" value="Ngantang">Ngantang</option>
                                            <option class="kecamatan" value="Pagak">Pagak</option>
                                            <option class="kecamatan" value="Pagelaran">Pagelaran</option>
                                            <option class="kecamatan" value="Pakis">Pakis</option>
                                            <option class="kecamatan" value="Pakisaji">Pakisaji</option>
                                            <option class="kecamatan" value="Poncokusumo">Poncokusumo</option>
                                            <option class="kecamatan" value="Pujon">Pujon</option>
                                            <option class="kecamatan" value="Singosari">Singosari</option>
                                            <option class="kecamatan" value="Sumbermanjing Wetan">Sumbermanjing Wetan</option>
                                            <option class="kecamatan" value="Sumberpucung">Sumberpucung</option>
                                            <option class="kecamatan" value="Tajinan">Tajinan</option>
                                            <option class="kecamatan" value="Tirtoyudo">Tirtoyudo</option>
                                            <option class="kecamatan" value="Tumpang">Tumpang</option>
                                            <option class="kecamatan" value="Turen">Turen</option>
                                            <option class="kecamatan" value="Wagir">Wagir</option>
                                            <option class="kecamatan" value="Wajak">Wajak</option>
                                            <option class="kecamatan" value="Wonosari">Wonosari</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="desa">
                                            <option>Pilih Desa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputTgl" class="col-sm-2 col-form-label">Tanggal Berdiri</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal-berdiri" id="inputTgl" value="<?= $tanggal_berdiri ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $email ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNotelp" class="col-sm-2 col-form-label">No.Telp</label>
                            <div class="col-sm-10">
                                <input type="notelp" class="form-control" name="no-tlp" id="inputNotelp" value="<?= $no_telephon ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputFile" class="col-sm-2 col-form-label">Struktur Organisasi Pemerintahan</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="struktur-organisasi" aria-label="file example">
                                <div class="invalid-feedback">Mohon Data di isi dulu.</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputFile" class="col-sm-2 col-form-label">Surat Keputusan</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="surat-keputusan" aria-label="file example">
                                <div class="invalid-feedback">Mohon Data di isi dulu.</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">Link Youtube</label>
                            <div class="col-sm-9">
                                <input type="link" class="form-control" id="link" name="link-youtube" value="<?= $link_youtube ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">Link Video Youtube 1</label>
                            <div class="col-sm-9">
                                <input type="link" class="form-control" id="link" name="link-video1" value="<?= $link_video1 ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">Link Video Youtube 2</label>
                            <div class="col-sm-9">
                                <input type="link" class="form-control" id="link" name="link-video2" value="<?= $link_video2 ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputnama" class="col-sm-2 col-form-label">Link Video Youtube 3</label>
                            <div class="col-sm-9">
                                <input type="link" class="form-control" id="link" name="link-video3" value="<?= $link_video3 ?>" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Mohon Data di isi dulu.
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan Profile</button>
                                <button type="button" class="btn btn-secondary">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

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
    <script src="../../js/select.js"></script>

    <script>
        var kec = document.getElementsByClassName('kecamatan');
        var des = document.getElementsByClassName('desa');
        // memunculkan nama kecamatan
        for (let i = 0; i < kec.length; i++) {
            if (kec[i].value == "<?= $kecamatan ?>") {
                kec[i].setAttribute("selected", true);
            }
        }
        // memunculkan nama desa
        for (let i = 0; i < des.length; i++) {
            if (des[i].value == "<?= $desa ?>") {
                des[i].setAttribute("selected", true);
            }
        }
    </script>
</body>

</html>