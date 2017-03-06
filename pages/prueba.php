<?php
session_start();
// condicion para no acceder a otros archivos
include '../Backend/conexion.php';
//validacion para evitar que el usuario ingrese por la url
if(!$_SESSION) {
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>prueba exitosa</title>
</head>
<body>
<p>esto es una prueba de funcionamiento</p>
<a href="../Backend/logout.php" name="salir">Salir</a>
</body>
</html>