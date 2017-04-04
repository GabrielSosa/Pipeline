<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

$mysqli = new mysqli("localhost", "root", "", "db_sistem_negocio");
    
    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
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


$queryMaxProyecto="SELECT MAX(id_persona) FROM tbl_personas";
$result3= mysqli_query($conexion->getConexion(), $queryMaxProyecto);
$row= mysqli_fetch_array($result3, MYSQLI_NUM);
$idPersona= $row[0] + 1;


$queryMaxIE="SELECT MAX(id_usuario) FROM tbl_usuarios";
$result4= mysqli_query($conexion->getConexion(), $queryMaxIE);
$row2= mysqli_fetch_array($result4, MYSQLI_NUM);
$idUsuario= $row2[0] + 1;

$sql_insertar_persona = "CALL `SP_REGISTRAR`('".$nombrePersona."', '".$pais."', '".$nombreUsuario."', '".$correo."', '".$password."', @p1);";

$resultado = $mysqli->query($sql_insertar_persona);


    



header("location: ../login.php");
?>  
</body>  