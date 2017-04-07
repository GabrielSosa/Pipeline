<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  


// Recibimos por POST los datos procedentes del formulario  

$nombreUsuario = $_POST["nombreUsuario"];  
$nombrePersona = $_POST["nombrePersona"];   
$correo = $_POST["correo"]; 
$pais = $_POST["pais"]; 
$password = $_POST["password"];  
$estado = 1; 

// Abrimos la conexion a la base de datos  
include 'conexion.php';

require_once( 'conexion.php');
$conexion = new Conexion();

$sql_insertar_usuario = "CALL `SP_REGISTRAR`('".$nombrePersona."', '".$pais."', '".$nombreUsuario."', '".$correo."', '".$password."', @p1);";

$resultado= mysqli_query($conexion->getConexion(), $sql_insertar_usuario);

header("location: ../login.php");
?>  
</body>  