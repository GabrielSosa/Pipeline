
<?php


$idproyecto=$_GET['id'];

$conexion = new Conexion();
$queryTasaGraf="SELECT * FROM tbl_tasa_retorno  where id_proyecto = $idproyecto";
$resultadoTasaGraf = mysqli_query($conexion->getConexion(), $queryTasaGraf);
$contador=1;

foreach ($resultadoTasaGraf as $resultgraf) {

    if ($contador==1) {
        $flujoPro = $resultgraf['flujo_efectivo']; 
        $interesPro = $resultgraf['interes'];   
        $saldoPro = $resultgraf['saldo_inicial_no_recuperado']; 
        $anio = $resultgraf['anio'];
        $cantidadRecuperada= $resultgraf['cantidad_recuperada'];
        $saldoFinalNoRecuperado= $resultgraf['saldo_inicial_no_recuperado'];
        $interesSobreSaldoNoRecuperado = $resultgraf['interes_sobre_saldo_no_recuperado'];
        
    }

    if($contador==2)
    {
        $flujoProAtl = $resultgraf['flujo_efectivo']; 
        $interesProAtl = $resultgraf['interes'];   
        $saldoProAtl = $resultgraf['saldo_inicial_no_recuperado']; 
        $anioAtl = $resultgraf['anio'];
        $cantidadRecuperadaAtl = $resultgraf['cantidad_recuperada'];
        $saldoFinalNoRecuperadoAtl = $resultgraf['saldo_inicial_no_recuperado'];
        $interesSobreSaldoNoRecuperadoAtl = $resultgraf['interes_sobre_saldo_no_recuperado'];
        
    }

    if($contador==3)
    {
        $flujoProAtl1 = $resultgraf['flujo_efectivo']; 
        $interesProAtl1 = $resultgraf['interes'];   
        $saldoProAtl1 = $resultgraf['saldo_inicial_no_recuperado']; 
        $anioAtl1 = $resultgraf['anio'];
        $cantidadRecuperadaAtl1 = $resultgraf['cantidad_recuperada'];
        $saldoFinalNoRecuperadoAtl1 = $resultgraf['saldo_inicial_no_recuperado'];
        $interesSobreSaldoNoRecuperadoAtl1 = $resultgraf['interes_sobre_saldo_no_recuperado'];
        
    }



       
    $contador++;


}

?>
        





<div class="col-md-10 col-md-offset-1">
    <h1>Tasa De Retorno</h1> 
    <p>Rentabilidad de los cobros y los pagos actualizados generados por una inversión.</p> 

</div>
<div class="col-md-10 col-md-offset-1">

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Variables</th>
        <th>Periodo I</th>
        <th>Periodo II</th>
        <th>Periodo II</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Flujo De Efectivo</td>
        <td><?php  echo $flujoPro; ?></td>
        <td><?php  echo $flujoProAtl; ?></td>
        <td><?php  echo $flujoProAtl1; ?></td>
    </tr>
    <tr>
        <td>Interés</td>
        <td><?php  echo  $interesPro; ?></td>
        <td><?php  echo  $interesProAtl; ?></td>
        <td><?php  echo  $interesProAtl1; ?></td>
    </tr>
    <tr>
        <td>año</td>
        <td><?php  echo $anio; ?></td>
        <td><?php  echo $anioAtl; ?></td>
        <td><?php  echo $anioAtl1; ?></td>
    </tr>
    <tr>
        <td>Cantidad Recuperada</td>
        <td><?php  echo $cantidadRecuperada; ?></td>
        <td><?php  echo $cantidadRecuperadaAtl; ?></td>
        <td><?php  echo $cantidadRecuperadaAtl1; ?></td>
    </tr>
    <tr>
        <td>Saldo Inicial No Recuperado</td>
        <td><?php  echo  $saldoPro; ?></td>
        <td><?php  echo  $saldoProAtl; ?></td>
         <td><?php  echo  $saldoProAtl1; ?></td>
    </tr>
     <tr>
        <td>Saldo Final No Recuperado</td>
        <td><?php  echo $saldoFinalNoRecuperado; ?></td>
        <td><?php  echo $saldoFinalNoRecuperadoAtl; ?></td>
        <td><?php  echo $saldoFinalNoRecuperadoAtl1; ?></td>
    </tr>
     <tr>
        <td>Interes Sobre Saldo No Recuperado</td>
        <td><?php  echo $interesSobreSaldoNoRecuperado; ?></td>
        <td><?php  echo $interesSobreSaldoNoRecuperadoAtl; ?></td>
        <td><?php  echo $interesSobreSaldoNoRecuperadoAtl1; ?></td>
    </tr>
    </tbody>
</table>
</div>
	</body>
</html>

