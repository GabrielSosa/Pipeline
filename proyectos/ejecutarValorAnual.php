

<?php

// Recibimos por POST los datos procedentes del formulario  

$costoInicialPro = $_POST["costoInicialPro"];  
$interesPro = $_POST["interesPro"];   
$valorSalvamentoPro = $_POST["valorSalvamentoPro"]; 
$periodoPro = $_POST["periodoPro"];  
$costoInicialAlt = $_POST["costoInicialAlt"];  
$interesAlt = $_POST["interesAlt"];   
$valorSalvamentoAlt = $_POST["valorSalvamentoAlt"]; 
$periodoAlt = $_POST["periodoAlt"];  
$idProyectoCosto = $_POST["idProyectoCosto"];

// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';
require_once( '../Backend/conexion.php');

$conexionCosto = new Conexion();
$queryCosto= "CALL `sp_comparacion_valor_anual`('".$idProyectoCosto."','".$costoInicialPro."', '".$costoInicialAlt."', '".$interesPro."', '".$interesAlt."', '".$valorSalvamentoPro."', '".$valorSalvamentoAlt."', '".$periodoPro."', '".$periodoAlt."',  @p1);";
$resultCosto= mysqli_query($conexionCosto->getConexion(), $queryCosto);

$conexionCosto->cerrarConexion();
 
header("location: ../proyectos.php?id=".$idProyectoCosto);

?>