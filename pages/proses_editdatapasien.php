<?php
include 'koneksi.php';

$id                = $_POST['kd_datapasien'];
$nama_ibu         = $_POST['nama_ibu'];
$umur_ibu         = $_POST['umur_ibu'];
$agama_ibu        = $_POST['agama_ibu'];
$pendidikan_ibu   = $_POST['pendidikan_ibu'];
$pekerjaan_ibu    = $_POST['pekerjaan_ibu'];
$alamat_ibu       = $_POST['alamat_ibu'];
$no_telp_ibu      = $_POST['no_telp_ibu'];
$haid_terakhir    = $_POST['haid_terakhir'];
$tafsiran         = $_POST['tafsiran_persalinan'];
$rencana_hamil    = $_POST['kehamilan_direncanakan'];
$kontrol          = $_POST['kontrol_sebelumnya'];
$transportasi     = $_POST['transportasi'];
$gol_darah        = $_POST['golongan_darah'];
$lila             = $_POST['lila'];
$tb               = $_POST['tb'];
$berat_badan      = $_POST['berat_badan'];
$riwayat_penyakit = $_POST['riwayat_penyakit'];
$riwayat_alergi   = $_POST['riwayat_alergi'];
$kontrasepsi      = $_POST['riwayat_kontrasepsi'];
$nama_bapak       = $_POST['nama_bapak'];
$umur_bapak       = $_POST['umur_bapak'];
$agama_bapak      = $_POST['agama_bapak'];
$pendidikan_bapak = $_POST['pendidikan_bapak'];
$pekerjaan_bapak  = $_POST['pekerjaan_bapak'];
$alamat_bapak     = $_POST['alamat_bapak'];
$no_telp_bapak    = $_POST['no_telp_bapak'];
$riwayat_kawin    = $_POST['riwayat_perkawinan'];
$lama_kawin       = $_POST['lama_perkawinan'];

$query="UPDATE datapasien SET
nama_ibu='$nama_ibu',
umur_ibu='$umur_ibu',
agama_ibu='$agama_ibu',
pendidikan_ibu='$pendidikan_ibu',
pekerjaan_ibu='$pekerjaan_ibu',
alamat_ibu='$alamat_ibu',
telepon_ibu='$no_telp_ibu',
pertama_haid='$haid_terakhir',
tafsiran_persalinan='$tafsiran',
hamil_direncanakan='$rencana_hamil',
kontrol='$kontrol',
transportasi='$transportasi',
gol_darah='$gol_darah',
lila='$lila',
tb='$tb',
berat_badan='$berat_badan',
riwayat_penyakit='$riwayat_penyakit',
riwayat_alergi='$riwayat_alergi',
riwayat_kontrasepsi='$kontrasepsi',
nama_bapak='$nama_bapak',
umur_bapak='$umur_bapak',
agama_bapak='$agama_bapak',
pendidikan_bapak='$pendidikan_bapak',
pekerjaan_bapak='$pekerjaan_bapak',
alamat_bapak='$alamat_bapak',
telepon_bapak='$no_telp_bapak',
riwayat_perkawinan='$riwayat_kawin',
lama_perkawinan='$lama_kawin'
where kd_datapasien = '$id'";

mysqli_query($koneksi, $query);
header("location:datapasien.php?pesan=input");
?>
