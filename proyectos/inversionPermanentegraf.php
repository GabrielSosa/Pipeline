<?php
$idproyecto=$_GET['id'];
$conexion = new Conexion();
$queryInversionPGraf="SELECT  `cantidad_depositada_hoy`, `cantidad_retirar_indefinida`, `cantidad_acumular`, `tiempo_requerido` FROM `tbl_resultados` WHERE id_proyecto= $idproyecto";
$resultadoInversionPGraf = mysqli_query($conexion->getConexion(), $queryInversionPGraf);

foreach ($resultadoInversionPGraf as $resultgraf) {
    
        $cantidadDepositada = $resultgraf['cantidad_depositada_hoy']; 
        $cantidadRetirar = $resultgraf['cantidad_retirar_indefinida'];   
        $cantidadAcumular = $resultgraf['cantidad_acumular']; 
        $Tiempo = $resultgraf['tiempo_requerido'];
		
		
    
	
	
	
}


$queryInteres="SELECT interes FROM `tbl_proyectos` where id_proyecto='".$idproyecto."';";
$Resultinteres = mysqli_query($conexion->getConexion(), $queryInteres);


foreach ($Resultinteres as $reintere) {
    
        $interes = $reintere['interes']; 
           
}





?>
        





<div class="col-md-10 col-md-offset-1">
    <h1>Inversion Permanente</h1> 
    <p> Son los fondos invertidos con la finalidad de conservar la inversión en el largo plazo.</p> 

</div>
<div class="col-md-10 col-md-offset-1">

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Variables</th>
        <th>Cantidad</th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Interés</td>
        <td><?php  echo $interes; ?></td>
       
    </tr>
    <tr>
        <td>Cantidad depositada hoy</td>
        <td><?php  echo  $cantidadDepositada; ?></td>
       
    </tr>
    <tr>
        <td>Cantidad para retirar indefinidamente</td>
        <td><?php  echo  $cantidadRetirar; ?></td>
       
    </tr>
	 <tr>
        <td>Cantidad para acumular</td>
        <td><?php  echo  $cantidadAcumular; ?></td>
       
    </tr>
  
    <tr>
        <td>Tiempo requerido (años)</td>
        <td><?php  echo  $Tiempo; ?></td>
       
    </tr>
  
    
    </tbody>
</table>
</div>
	</body>
</html>