<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

//$_SESSION['username'] = $_POST['username'];

//echo $username.'<br>';
//echo $password;

$query =mysqli_query ($mysqli,"SELECT * FROM tb_mahasiswa where username = '$username' and password = '$password'");
$result = mysqli_num_rows($query);

if ($result > 0) {
    header("location:../app/home.php");
}
else {
    header("location:../index.php?pesan=error");
}


?>