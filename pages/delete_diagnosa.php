<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$kd_hasil   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from hasildiagnosa where kd_hasil='$kd_hasil'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:hasiltree.php");
?>
