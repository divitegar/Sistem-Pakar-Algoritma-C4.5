<?php
include 'koneksi.php';

$thn_partus       = $_POST['partus'];
$jenis_kelamin    = $_POST['jk'];
$bbl              = $_POST['bbl'];
$penolong         = $_POST['penolong'];
$jenis_persalinan = $_POST['jp'];
$usia_kehamilan   = $_POST['uk'];
$keadaan          = $_POST['keadaan'];
$laktasi          = $_POST['laktasi'];

$query="INSERT INTO riwayat SET partus='$thn_partus', jk='$jenis_kelamin', bbl='$bbl', penolong='$penolong', jenis_persalinan='$jenis_persalinan', uk='$usia_kehamilan', keadaan_bersalin='$keadaan', Laktasi='$laktasi'";
mysqli_query($koneksi, $query);
header("location:riwayat.php?pesan=input");
?>
