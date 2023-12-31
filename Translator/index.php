<?php
date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non'Admien'prom Translatoren laar'Marcell</title>
    <link rel="shortcut icon" href="Tanda Tangan New.png">
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <h2>Translatoren laar'Marcell</h2>
    <p>Jika anda masuk ke halaman ini, berarti anda bukanlah admin dari Translatoren op laar'Marcell, ayo masukan data anda untuk mendaftar sebagai admin dan bisa memasukan dan menghapus data lama dan data baru pada database penyimpanan kata</p>
    
    <form name="formNonAdmin" method="post" action="nonAdmin.php">

        <label for="username">Buat username anda :</label><br>
        <input type="text" name="username" id="username" autocomplete="off"><br><br>

        <label for="nama">Masukan nama lengkap :</label><br>
        <input type="text" name="nama_admin" id="nama_admin" autocomplete="off"><br><br>

        <label for="email">Masukan Email aktif anda :</label><br>
        <input type="text" name="email_admin" id="email_admin" autocomplete="off"><br><br>

        <label for="pass">Buat Password anda :</label><br>
        <input type="password" name="password_admin" id="password_admin"><br><br>

        <button type="submit" name="submit" id="Submit" value=<?php echo date("h:i:sa") ?>Masukan data</button>

    </form>
</body>
</html>