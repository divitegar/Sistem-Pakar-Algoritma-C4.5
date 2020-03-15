<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$kd_riwayat   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from riwayat where kd_riwayat='$kd_riwayat'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:riwayat.php");
?>
