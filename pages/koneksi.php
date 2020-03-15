<?php
// $koneksi = mysqli_connect("localhost","root","","smartmom");
//
// // Check connection
// if (mysqli_connect_errno()){
// 	echo "Koneksi database gagal : " . mysqli_connect_error();
// }

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'smartmom';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


?>
