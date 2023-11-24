<?php
include '../koneksi.php';
session_start();

if (isset($_SESSION)) {
    $id_pengumuman = $_GET['id'];

    $sql = "DELETE FROM Pengumuman WHERE Id_Pengumuman = $id_pengumuman";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>
            alert('Data Sukses Dihapus');
            history.back();
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus:' . $koneksi->error);
            history.back();
        </script>";
    }

}
?>