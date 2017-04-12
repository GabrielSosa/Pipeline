<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

session_start();

// Recibimos por POST los datos procedentes del formulario  

$nombreProyecto = $_POST["nombreProyecto"];  
$descripcion = $_POST["descripcion"];  
$n = $_POST["n"];  
$t = $_POST["t"]; 
$i = $_POST["i"];  
$montoPrestamo = $_POST["montoPrestamo"];  
$fechaInicio = $_POST["fechaInicio"];  

// Abrimos la conexion a la base de datos  
include 'conexion.php';
require_once( 'conexion.php');
$conexion = new Conexion();



$usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";
// Ejecutamos la consulta
$resultado = mysqli_query($conexion->getConexion(), $query_usuario);
//  obtenermos la cantidad de registros de la consulta
$usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
$idUsuario = $usuarioQ[0];

//Aqui obtenemos el id del Proyecto
$queryMaxProyecto="SELECT MAX(id_proyecto) FROM tbl_proyectos";
$result3= mysqli_query($conexion->getConexion(), $queryMaxProyecto);
$row= mysqli_fetch_array($result3, MYSQLI_NUM);
$idProyecto= $row[0] + 1;
   
$sql="CALL `SP_CREAR_PROYECTO`('".$idUsuario."', '".$nombreProyecto."', '".$descripcion."', '".$n."', '".$i."', '".$t."','".$montoPrestamo."', '".$fechaInicio."', @p1);";    
$result5 = mysqli_query($conexion->getConexion(), $sql);  


$sqlIS="CALL `sp_interes_simple`('".$idProyecto."', @p1);";    
$resultadoIS = mysqli_query($conexion->getConexion(), $sqlIS); 

$sqlIC="CALL `sp_interes_compuesto`('".$idProyecto."', @p1);";    
$resultadoIC = mysqli_query($conexion->getConexion(), $sqlIC); 


$valorFuturo = $montoPrestamo * pow((1 + $i),$n);
$sqlVF="CALL `sp_valor_futuro`('".$idProyecto."', '".$valorFuturo."', @p1);";    
$resultadoVF = mysqli_query($conexion->getConexion(), $sqlVF); 


$valorPresente = $valorFuturo * (1 / pow((1 + $i),$n));
$sqlVP="CALL `sp_valor_presente`('".$idProyecto."', '".$valorPresente."', @p1);";    
$resultadoVP = mysqli_query($conexion->getConexion(), $sqlVP);  

$conexion->cerrarConexion();
header("location: ../index.php");
?>  
</body>  