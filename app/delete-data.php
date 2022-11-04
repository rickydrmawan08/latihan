<?php
include '../auth/koneksi.php';
$id = $_GET['id'];
$query =mysqli_query ($mysqli,"delete from tb_mahasiswa WHERE id ='$id'");

//header('location :home.php');

?>