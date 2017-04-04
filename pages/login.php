<?php
	session_start();
	include '../Backend/conexion.php';
	if(isset($_SESSION['email'])){
		echo '<script> window.location="logout.php"; </script>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Login</title>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../css/Login.css" />
	<!-- Google Font -->
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery Library -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <!-- Bootstrap Core JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	<section class="container">
	    <section class="login-form">
		<section>
			<h4>Iniciar Sesion</h4>
		</section>
		<form method="post" action="../Backend/validar.php" role="login">
			<img src="../images/user.png" alt="" />
			<input type="usuario" name="email" required placeholder="Usuario" class="form-control input-lg" />
			<input type="password" name="password" required placeholder="Password" class="form-control input-lg" />
			<button type="submit" name="go" class="btn btn-block btn-info">Login</button>
			<input type="checkbox" name="remember" value="1" checked /> Recordarme
			<a href="#" class="pull-right">Ayuda</a>
		</form>
		<section>
			<a href="registrarse.php">Crear una cuenta</a>
		</section>
		</section>
	</section>
	
</body>
</html>