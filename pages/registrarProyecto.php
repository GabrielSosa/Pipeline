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
$saldoPagado = $_POST["saldoPagado"];  
$entradaEfectivo = $_POST["entradaEfectivo"];  
$salidaEfectivo = $_POST["salidaEfectivo"];  
$gradiente = $_POST["gradiente"];  

// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';

require_once( '../Backend/conexion.php');
$conexion = new Conexion();



$usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);
    //  obtenermos la cantidad de registros de la consulta
    $usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $idUsuario = $usuarioQ[0];

$queryMaxProyecto="SELECT MAX(id_proyecto) FROM tbl_proyectos";
$result3= mysqli_query($conexion->getConexion(), $queryMaxProyecto);
$row= mysqli_fetch_array($result3, MYSQLI_NUM);
$idProyecto= $row[0] + 1;

echo $idProyecto;

$queryMaxIE="SELECT MAX(id_interes_generado) FROM tbl_interes_generado";
$result4= mysqli_query($conexion->getConexion(), $queryMaxIE);
$row2= mysqli_fetch_array($result4, MYSQLI_NUM);
$idIE= $row2[0] + 1;

echo $idIE;

$sql_interes_generado = "INSERT INTO tbl_interes_generado (id_interes_generado, id_proyecto, saldo_pagado, monto_prestamo) VALUES ('$idIE', '$idProyecto', '$saldoPagado', '$montoPrestamo');";

$result3 = mysqli_query($conexion->getConexion(), $sql_interes_generado);
    
    

$sql = "INSERT INTO tbl_proyectos (id_proyecto,     id_usuario,  nombre_proyecto,     descripcion,     periodo,     interes,     tiempo,  gradiante,   monto_prestamo,  saldo_pagado,    entrada_efectivo,    salida_efectivo ) VALUES ($idProyecto,$idUsuario,
                                '$nombreProyecto',  
                                '$descripcion',  
                                '$n',  
                                '$i',
                                '$t',  
                                '$gradiente',  
                                '$montoPrestamo',  
                                '$saldoPagado', 
                                '$entradaEfectivo',  
                                '$salidaEfectivo')";  
$result5 = mysqli_query($conexion->getConexion(), $sql);  


header("location: index.php");
?>  
</body>  