<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
$result = $koneksi->query($query);

if (mysqli_num_rows($result)) {
    $hasil = $result->fetch_array();
    $_SESSION['id'] = $hasil['id'];
    $_SESSION['username'] = $hasil['username'];
    $_SESSION['level'] = $hasil['level'];
    $_SESSION['success'] = 'success';
}
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../notifikasi.php">';
?>