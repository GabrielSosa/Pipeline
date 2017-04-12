<?php

// Recibimos por POST los datos procedentes del formulario  

$costoInicialPro = $_POST["costoInicialPro"];  
$inversionGlobalPro = $_POST["inversionGlobalPro"];   
$costoInicialAlt = $_POST["costoInicialAlt"]; 
$inversionGlobalAlt = $_POST["inversionGlobalAlt"]; 
$interesAlt = $_POST["interesAlt"];  
$idProyectoCosto = $_POST["idProyectoCosto"];

// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';
require_once( '../Backend/conexion.php');

$conexionCosto = new Conexion();
$queryCosto= "CALL `sp_costo_capitalizado`('".$idProyectoCosto."','".$costoInicialPro."', '".$inversionGlobalPro."', '".$costoInicialAlt."', '".$interesAlt."', '".$inversionGlobalAlt."', @p1);";
$resultCosto= mysqli_query($conexionCosto->getConexion(), $queryCosto);

$conexionCosto->cerrarConexion();
 
header("location: ../proyectos.php?ref=<?php echo $idProyectoCosto; ?>");

?>