<?php
// Abrimos la conexion a la base de datos  
include '../Backend/conexion.php';
require_once( '../Backend/conexion.php');


// Recibimos por POST los datos procedentes del formulario  

$p_cantidad_depositadapro = $_POST["cantidad_depositadapro"]; 
$p_cantidad_retirar_indefinidamentepro = $_POST["cantidad_retirarpro"];
$idProyecto = $_POST["idProyecto"]; 

$conexion = new Conexion();
//Obtenemos el interes del proyecto segun su id
$queryInteres="SELECT interes FROM `tbl_proyectos` where id_proyecto='".$idProyecto."';";
$Resultinteres = mysqli_query($conexion->getConexion(), $queryInteres);


foreach ($Resultinteres as $reintere) {
    
        $interes = $reintere['interes']; 
           
}

$conexion->cerrarConexion();

//Calculamos cantidad_acumular y  p_tiempo_requerido

$p_cantidad_acumularAlt = $p_cantidad_retirar_indefinidamentepro/($interes/100);
$p_cantidad_acumularAlt =round($p_cantidad_acumularAlt , 2); 

$x=$p_cantidad_acumularAlt/$p_cantidad_depositadapro;

$p_tiempo_requeridopro = log($x)/log(1+($interes/100)); 
$p_tiempo_requeridopro =round($p_tiempo_requeridopro , 2); 


$conexion = new Conexion();
$queryInversionP= "CALL sp_inversion_permanente($idProyecto,$p_cantidad_depositadapro,$p_cantidad_retirar_indefinidamentepro,$p_cantidad_acumularAlt,$p_tiempo_requeridopro, @p1);";
$resultCosto= mysqli_query($conexion->getConexion(), $queryInversionP);
$conexion->cerrarConexion();
header("location: ../proyectos.php?id=".$idProyecto);


?>