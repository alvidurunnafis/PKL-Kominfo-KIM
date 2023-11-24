<?php

include '../koneksi.php';
session_start();

if (isset($_SESSION)) {
    $id_pengumuman = $_POST['id-pengumuman'];
    $judul_pengumuman = $_POST['judul-pengumuman'];
    $isi_pengumuman = $_POST['isi-pengumuman'];
    $data_update = date('l, d-m-Y');
    
    $sql = "UPDATE pengumuman SET Judul_Pengumuman = '$judul_pengumuman', Isi_Pengumuman='$isi_pengumuman', Tanggal_Update = '$data_update' WHERE Id_Pengumuman=$id_pengumuman";
    
    if ($koneksi->query($sql) === TRUE) {
        echo '<script>
            alert("Pengumuman Berhasil Diubah");
        </script>';
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../admin/berita/pengumuman-admin.php'>";
    } else {
        echo "<script>
            alert('Data Gagal diupdate:' . $koneksi->error);
            history.back();
        </script>";
    }
}