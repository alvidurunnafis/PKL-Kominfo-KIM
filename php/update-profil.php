<?php
session_start();
include '../koneksi.php';
if (isset($_SESSION)) {

    $nama_kim = $_POST['nama-kim'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $tanggal_berdiri = $_POST['tanggal-berdiri'];
    $email = $_POST['email'];
    $no_tlp = $_POST['no-tlp'];
    $link_youtube = $_POST['link-youtube'];
    // $link_video1 = $_POST[''];
    $user = $_SESSION['id'];

    // foto profil
    $nama_fileFP = $_FILES['foto-profil']['name'];
    $tipe_fileFP = $_FILES['foto-profil']['type'];
    $ukuran_fileFP = $_FILES['foto-profil']['size'];
    $error_fileFP = $_FILES['foto-profil']['error'];
    $temp_fileFP = $_FILES['foto-profil']['tmp_name'];
    $fileFP = addslashes(file_get_contents($_FILES['foto-profil']['tmp_name']));

    // struktur organisasi
    $nama_fileSO = $_FILES['struktur-organisasi']['name'];
    $tipe_fileSO = $_FILES['struktur-organisasi']['type'];
    $ukuran_fileSO = $_FILES['struktur-organisasi']['size'];
    $error_fileSO = $_FILES['struktur-organisasi']['error'];
    $temp_fileSO = $_FILES['struktur-organisasi']['tmp_name'];
    $fileSO = addslashes(file_get_contents($_FILES['struktur-organisasi']['tmp_name']));

    //surat keputusan
    $nama_fileSK = $_FILES['surat-keputusan']['name'];
    $tipe_fileSK = $_FILES['surat-keputusan']['type'];
    $ukuran_fileSK = $_FILES['surat-keputusan']['size'];
    $error_fileSK = $_FILES['surat-keputusan']['error'];
    $temp_fileSK = $_FILES['surat-keputusan']['tmp_name'];
    $fileSK = addslashes(file_get_contents($_FILES['surat-keputusan']['tmp_name']));


    $tipefileFP = ['jpeg', 'png', 'jpg'];
    $tipefileuploadFP = explode('.', $nama_fileFP);
    $ekstensiFP = end($tipefileuploadFP);
    $tipefileuploadjadiFP = strtolower($ekstensiFP);

    $tipefileSO = ['jpeg', 'png', 'jpg'];
    $tipefileuploadSO = explode('.', $nama_fileSO);
    $ekstensiSO = end($tipefileuploadSO);
    $tipefileuploadjadiSO = strtolower($ekstensiSO);

    $tipefileSK = 'pdf';
    $tipefileuploadSK = explode('.', $nama_fileSK);
    $ekstensiSK = end($tipefileuploadSK);
    $tipefileuploadjadiSK = strtolower($ekstensiSK);

    // cek file susunan organisasi diisi atau tidak
    if ($error_fileFP == 4) {
        echo "<script> alert('Mohon maaf, Foto Profil belum diisi')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }
    if ($error_fileSO == 4) {
        echo "<script> alert('Mohon maaf, Susunan Organisasi belum diisi')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }
    if ($error_fileSK == 4) {
        echo "<script> alert('Mohon maaf, Surat Keterangan belum diisi')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }

    // cek ekstensi
    if ($tipefileuploadjadiFP != $tipefileFP[0] && $tipefileuploadjadiFP != $tipefileFP[1] && $tipefileuploadjadiFP != $tipefileFP[2]) {
        echo "<script> alert('Mohon maaf, File Foto Profil harus bertipe jpg, jpeg, dan png')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }
    if ($tipefileuploadjadiSO != $tipefileSO[0] && $tipefileuploadjadiSO != $tipefileSO[1] && $tipefileuploadjadiSO != $tipefileSO[2]) {
        echo "<script> alert('Mohon maaf, File Struktur Organisasi harus bertipe jpg, jpeg, dan png')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }
    if ($tipefileuploadjadiSK != $tipefileSK) {
        echo "<script> alert('Mohon maaf, File Struktu Organisasi harus bertipe pdf')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }

    //cek ukuran file
    if ($ukuran_fileFP > 5242880) {
        echo "<script> alert('Mohon maaf, Ukuran Foto Profil melebihi 5Mb')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }

    if ($ukuran_fileSO > 5242880) {
        echo "<script> alert('Mohon maaf, Ukuran Struktur Organisasi melebihi 5Mb')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }

    if ($ukuran_fileSK > 5242880) {
        echo "<script> alert('Mohon maaf, Ukuran Surat Keterangan melebihi 5Mb')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/new-post.php'>";
        die;
    }


    //memasukkan data ke dalam database
    $sql = "UPDATE profil SET
        Foto_Profil = '$nama_fileFP', 
        Nama_KIM = '$nama_kim', 
        Alamat = '$alamat', 
        Desa = '$desa', 
        Kecamatan = '$kecamatan', 
        Tanggal_Berdiri = '$tanggal_berdiri', 
        Email = '$email', 
        No_Telephon = '$no_tlp', 
        Struktur_Organisasi = '$nama_fileSO', 
        Surat_Keputusan = '$nama_fileSK', 
        Link_Youtube = '$link_youtube' 
        WHERE Id_Profil = $user";

    $hasil = $koneksi->query($sql);

    if ($hasil == true) {

        echo "<script> alert('Simpan data berhasil!')</script>";
        $_SESSION['nama-kim'] = $nama_kim;

        //pindah file
        move_uploaded_file($temp_fileFP, '../file/foto-profil/' . $nama_fileFP);
        move_uploaded_file($temp_fileSO, '../file/setruktur-organisasi/' . $nama_fileSO);
        move_uploaded_file($temp_fileSK, '../file/surat-keterangan/' . $nama_fileSK);
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/profil/view-profile.php'>";
    } else {
        echo "<script> alert('Simpan data gagal!')</script>";
        die('Query Error : ' . mysqli_error($koneksi));
        //echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/profil/input-profile.php'>";
    }
}
