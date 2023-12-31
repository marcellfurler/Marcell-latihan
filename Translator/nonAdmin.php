

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password', 'database');

$con = mysqli_connect('localhost', 'root', '', 'bahasa_marcell');

// check connection
// if (!$con) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// get the post records
$nama_admin = $_POST['nama_admin'];
$email_admin = $_POST['email_admin'];
$username = $_POST['username'];
$password_admin = $_POST['password_admin'];
$submit = $_POST['submit']


// prevent SQL injection
// $namaAdm = mysqli_real_escape_string($con, $namaAdm);
// $emailAdm = mysqli_real_escape_string($con, $emailAdm);
// $userAdm = mysqli_real_escape_string($con, $userAdm);
// $passAdm = mysqli_real_escape_string($con, $passAdm);

// database insert SQL code
$querry = "INSERT INTO admin_translator VALUES ('$username', '$nama_admin', '$email_admin', '$password_admin', '$submit')";

// insert in database
mysqli_query($con, $querry);

?>
