

<?php

// Recibimos por POST los datos procedentes del formulario  

$flujoPro = $_POST["flujoPro"];  
$interesPro = $_POST["interesPro"];   
$saldoPro = $_POST["saldoPro"]; 
$periodoPro = $_POST["periodoPro"];  
$flujoAlt = $_POST["flujoAlt"];  
$interesAlt = $_POST["interesAlt"];   
$saldoAlt = $_POST["saldoAlt"]; 
$periodoAlt = $_POST["periodoAlt"];  
$idProyectoTasaDeRetorno = $_POST["idProyectoTasaDeRetorno"];




// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';
require_once( '../Backend/conexion.php');

$conexionTasa = new Conexion();
$queryTasa= "CALL sp_tasa_retorno($idProyectoTasaDeRetorno,$interesPro,$periodoPro,$saldoPro,$flujoPro,@p1)";
$resultTasa= mysqli_query($conexionTasa->getConexion(), $queryTasa);
$queryTasaAlt= "CALL sp_tasa_retorno($idProyectoTasaDeRetorno,$interesAlt,$periodoAlt,$saldoAlt,$flujoAlt,@p1)";
$resultTasaAlt= mysqli_query($conexionTasa->getConexion(), $queryTasaAlt);
$conexionTasa->cerrarConexion();
 
header("location: ../proyectos.php?id=".$idProyectoTasaDeRetorno);

?>