

<?php

// Recibimos por POST los datos procedentes del formulario  

$flujoPro = $_POST["flujoPro"];  
$interesPro = $_POST["interesPro"];   
$saldoPro = $_POST["saldoPro"]; 
$periodoPro = $_POST["periodoPro"];  
$flujoAlt = $_POST["flujoAlt"];  
$interesAlt = $_POST["interesAlt"];   
$saldoAlt = $_POST["saldoAlt1"]; 
$periodoAlt = $_POST["periodoAlt1"];
$flujoAlt1 = $_POST["flujoAlt1"];  
$interesAlt1 = $_POST["interesAlt1"];   
$saldoAlt1 = $_POST["saldoAlt1"]; 
$periodoAlt1 = $_POST["periodoAlt1"];  
$idProyectoTasaDeRetorno = $_POST["idProyectoTasaDeRetorno"];




// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';
require_once( '../Backend/conexion.php');

$conexionTasa = new Conexion();
$queryTasa= "CALL sp_tasa_retorno($idProyectoTasaDeRetorno,$interesPro,$periodoPro,$saldoPro,$flujoPro,@p1)";
$resultTasa= mysqli_query($conexionTasa->getConexion(), $queryTasa);
$queryTasaAlt= "CALL sp_tasa_retorno($idProyectoTasaDeRetorno,$interesAlt,$periodoAlt,$saldoAlt,$flujoAlt,@p1)";
$resultTasaAlt= mysqli_query($conexionTasa->getConexion(), $queryTasaAlt);
$queryTasaAlt1= "CALL sp_tasa_retorno($idProyectoTasaDeRetorno,$interesAlt1,$periodoAlt1,$saldoAlt1,$flujoAlt1,@p1)";
$resultTasaAlt1= mysqli_query($conexionTasa->getConexion(), $queryTasaAlt1);
$conexionTasa->cerrarConexion();
 
header("location: ../proyectos.php?id=".$idProyectoTasaDeRetorno);

?>