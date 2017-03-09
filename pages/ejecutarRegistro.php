<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  


// Recibimos por POST los datos procedentes del formulario  

$nombreUsuario = $_POST["nombreUsuario"];  
$nombrePersona = $_POST["nombrePersona"];  
$apellidoPersona = $_POST["apellidoPersona"];  
$correo = $_POST["correo"]; 
$password = $_POST["password"];  
$estado = 1; 

// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';

require_once( '../Backend/conexion.php');
$conexion = new Conexion();


$queryMaxProyecto="SELECT MAX(id_persona) FROM tbl_personas";
$result3= mysqli_query($conexion->getConexion(), $queryMaxProyecto);
$row= mysqli_fetch_array($result3, MYSQLI_NUM);
$idPersona= $row[0] + 1;


$queryMaxIE="SELECT MAX(id_usuario) FROM tbl_usuarios";
$result4= mysqli_query($conexion->getConexion(), $queryMaxIE);
$row2= mysqli_fetch_array($result4, MYSQLI_NUM);
$idUsuario= $row2[0] + 1;


$sql_insertar_persona = "INSERT INTO tbl_personas (id_persona, primer_nombre, primer_apellido, correo_electronico) VALUES ('$idPersona', '$nombrePersona', '$apellidoPersona', '$correo');";

$result3 = mysqli_query($conexion->getConexion(), $sql_insertar_persona);
    
    

$sql_insertar_usuario = "INSERT INTO tbl_usuarios (id_usuario, usuario, password, id_persona, id_estado) VALUES ('$idUsuario', '$nombreUsuario', '$password', '$idPersona', 1);";  
$result5 = mysqli_query($conexion->getConexion(), $sql_insertar_usuario);  

//echo "<script>alert('Usuario Ingreaso con exito')</script>";


header("location: index.php");
?>  
</body>  