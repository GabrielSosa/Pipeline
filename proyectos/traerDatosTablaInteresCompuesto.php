<?php
	
       function  consultaInteresCompuesto($idProyecto)
    {
        $consulta="SELECT * FROM tbl_interes_compuesto where id_proyecto=".$idProyecto;
        return $consulta;
    }


    include ("conexion.php");
    $con= new Conexion();
   // $dbx=mysqli_connect("localhost","root","root","db_sistem_negocio");
    $dbx=$con->getConexion();
	$consulta = consultaInteresCompuesto(4);
	$registro = mysqli_query($dbx,$consulta);
	
	$tabla = "";
	
	while($row = mysqli_fetch_array($registro)){		

		
		
		$tabla.='{
				  "Monto_Prestamo":"'.$row['monto_prestamo'].'",
				  "Periodo":"'.$row['periodo'].'",
				  "Interes":"'.$row['interes'].'",
				  "Monto_Pagar":"'.$row['monto_pagar'].'",
				  "Monto_Pagado":"'.$row['monto_pagado'].'",
                  "Interes_Compuesto":"'.$row['interes_compuesto'].'"
				},';		
	}	

	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	

?>