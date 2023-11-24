<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form Keren</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login-baru.css" type="text/css">
</head>

<body>
    <form action="php/aksi_login.php" method="POST">
        <h2>Edit Profil</h2>
        <div class="container">
            <input type="text" placeholder="Masukkan Username..." name="username" required>
            <input type="password" placeholder="Masukkan Password Lama..." name="password" required>
            <input type="password" placeholder="Masukkan Password Baru..." name="password" required>
            <input type="password" placeholder="Ulangi Password Baru..." name="password" required>
            <button type="submit" class="btn">Simpan</button>
            <a type="button" href="../index.php" class="btn cancelbtn">Cancel</a>
        </div>
        <div class="footer-copyright my-1">
            <p class="text-light text-center">
                © 2020 Copyright:
                <a href="/" class="text-light bold"> Dinas Komunikasi dan Informasi Kabupaten Malang 2022</a>
            </p>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>