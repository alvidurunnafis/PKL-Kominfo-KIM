<?php
session_start();
include '../koneksi.php';
if (isset($_SESSION)) {
    //identifikasi variable yang dimasukkan ke database artikel
    $judul_artikel = $_POST['judul-artikel'];
    $tema_artikel = $_POST['tema-artikel'];
    $isi_artikel = $_POST['isi-artikel'];
    $status = "Menunggu";
    
    //identifikasi variable yang dimasukkan ke database galeri
    $nama_file = $_FILES['foto-artikel']['name'];
    $tipe_file = $_FILES['foto-artikel']['type'];
    $ukuran_file = $_FILES['foto-artikel']['size'];
    $error_file = $_FILES['foto-artikel']['error'];
    $temp_file = $_FILES['foto-artikel']['tmp_name'];
    $file = addslashes(file_get_contents($_FILES['foto-artikel']['tmp_name']));
    
    //data umum
    $user = $_POST['nama-kim'];
    $date = date('l, d-m-Y');

    $tipefile = ['jpeg', 'png', 'jpg'];
    $tipefileupload = explode('.', $nama_file);
    $ekstensi = end($tipefileupload);
    $tipefileuploadjadi = strtolower($ekstensi);


    // cek foto diisi atau tidak
    if ($error_file == 4) {
        echo "<script> 
                alert('Mohon maaf, Foto belum diisi'); 
                history.back()
            </script>";
        die;
    }
    // cek ekstensi
    if ($tipefileuploadjadi != $tipefile[0] && $tipefileuploadjadi != $tipefile[1] && $tipefileuploadjadi != $tipefile[2]) {
        echo "<script> 
                alert('Mohon maaf, Foto haru bertipe jpg, jpeg, dan png');
                history.back();
            </script>";
        die;
    }

    //cek ukuran file
    if ($ukuran_file > 5242880) {
        echo "<script> 
                alert('Mohon maaf, Ukuran Foto melebihi 5Mb');
                history.back();    
            </script>";
        die;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '-';
    $nama_file_baru .= $user;
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi;

    
    // memsukkan data artikel ke dalam database
    $sql_artikel = "INSERT INTO artikel VALUES (NULL, '$judul_artikel', '$isi_artikel', '$date', '$tema_artikel', '$nama_file_baru','$status', $user)";
    $hasil_artikel = $koneksi->query($sql_artikel);
    
    $sql_galeri = "INSERT INTO galeri VALUES (NULL, '$nama_file_baru', '$ukuran_file', '$file', '$tipe_file', '$date', $user)";
    $hasil_galeri = $koneksi->query($sql_galeri);
    
    if ($hasil_artikel == TRUE && $hasil_galeri == TRUE) {
        echo "<script> alert('Data Berhasil Disimpan')</script>";
        echo "<META HTTP-EQUIV=Refresh Content='0; URL=../user/berita/myposts.php'>";

        move_uploaded_file($temp_file, '../file/gallery/' . $nama_file_baru);
    } else {
        echo "<script> 
                alert('Data Gagal Disimpan');
                history.back();
            </script>";
        print_r($koneksi->error_list);
    }
}
