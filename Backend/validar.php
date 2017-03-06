<?php
	session_start(); 

	include 'conexion.php';
	require_once( 'conexion.php');
	$conexion = new Conexion();
	$username = $_POST['email'];
	$pass = $_POST['password'];
	if(isset($username) && isset($pass)) {
	
		$sql= mysqli_query($conexion->getConexion(), "SELECT * FROM TBL_USUARIOS WHERE USUARIO='$username' AND PASSWORD='$pass' " );
		$array= mysqli_fetch_array( $sql);
		
		if($array['password']==$pass && $array['usuario']==$username){
			$_SESSION['id']=$array['id_usuario'];
			$_SESSION['usuario']=$array['usuario'];
			echo "<script>location.href='../pages/index.php' </script>";// redirigir a la pagina deseada si cumple el login
		}else{	
			echo "<script>location.href='../pages/login.php' </script>";// redirigir al login si es incorrecto
			echo "<script>alert('Usuario o Contraseña incorrectos') </script>";
			session_destroy();
		}
			
	}else{
		header("location:../pages/login.php");
	}	


?>