<?php
include '../auth/koneksi.php';

$query =mysqli_query ($mysqli,"INSERT INTO tb_mahasiswa(id,nama,nim,semester,username,password) VALUES
('','','','','','')");

header('location:home.php');

?>