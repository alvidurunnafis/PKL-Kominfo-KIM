<?php
include '../koneksi.php';
session_start();

if (isset($_SESSION)) {
    
    $judul_pengumuman = $_POST['judul-pengumuman'];
    $isi_pengumuman = $_POST['isi-pengumuman'];
    $date = date('l, d-m-Y');
    $user = $_SESSION['id'];

    $sql = "INSERT INTO pengumuman VALUES (NULL, '$judul_pengumuman', '$isi_pengumuman',NULL , '$date', $user)";
    $hasil = $koneksi->query($sql);
    if ($hasil) {
        echo '<script>
            alert("Pengumuman Berhasil disimpan");
        </script>';
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../admin/berita/pengumuman-admin.php'>";
    }else {
        echo '<script>
            alert("Pengumuman Gagal disimpan");
            history.back();
        </script>';
        echo ("Error description: " . $koneksi->error);
    }




}


?>