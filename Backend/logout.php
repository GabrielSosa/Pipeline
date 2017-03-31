<?php
session_start();
include 'conexion.php';

if ($_SESSION['usuario']) {
	session_unset();
	session_destroy();
	header("location:../login.php");

}else{
	header("location:../login.php");
}




?>
