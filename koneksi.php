<?php

$host = "localhost";
$database = "kim_kominfo";
$user = "root";
$pass = '';

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi) {
    echo '<script>
            alert("Gagal Menghubungkan ke Database")
        </script>';
}

?>