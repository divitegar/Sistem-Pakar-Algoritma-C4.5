<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$kd_datapasien   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from datapasien where kd_datapasien='$kd_datapasien'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:datapasien.php");
?>
