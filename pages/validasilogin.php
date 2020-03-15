<?php
session_start();
if($_SESSION['status'] == ""){
	header("location:pages/login.html");
}
?>
