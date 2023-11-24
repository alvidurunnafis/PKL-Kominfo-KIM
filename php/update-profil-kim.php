<?php
include '../koneksi.php';
session_start();
if (isset($_SESSION)) {
    $id_profil_kim = $_POST['id_profil_kim'];
    $isi_profil = $_POST['isi-profil'];
    $user = $_SESSION['id'];
    $date = date('l, d-m-Y');
    $sql = "UPDATE profil_kim SET 
        Isi_Profil_KIM = '$isi_profil', 
        Update_At = '$date',
        Penulis = $user
        WHERE Id_Profil_KIM = $id_profil_kim";
    $hsail = $koneksi->query($sql);
    if ($hsail) {
        echo "<script>
            alert('Data Berhasil Disimpan')
        </script>";
        if ($id_profil_kim == 1) {
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/profil/view-dasarhukum.php">';
        }elseif ($id_profil_kim == 2) {
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/profil/view-pengertian.php">';
        }else {
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/profil/view-tupoksi.php">';
        }
    }else {
        echo "<script>
            alert('Data Gagal Disimpan Error description: ' . $koneksi->error);
            history.back();
        </script>";
    }
}
?>