
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
       
    $contador++;


}
if($cantidadRecuperada < 0){
    $cantidadRecuperada = -1*$cantidadRecuperada;
}
if($cantidadRecuperadaAtl < 0){
    $cantidadRecuperadaAtl = -1*$cantidadRecuperadaAtl;
}
$respuesta =$cantidadRecuperada+$cantidadRecuperadaAtl;
$respuesta1 = ($cantidadRecuperada/$respuesta)*100;
$respuesta2 = ($cantidadRecuperadaAtl/$respuesta)*100;
?>
        



<style type="text/css">
    #valorTasaRetorno {
    height: 400px; 
    min-width: 800px; 
    max-width: 800px;
    margin: 0 auto;
}

</style>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        $('#valorTasaRetorno').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Tasa De Retorno con Propuesta II'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'factibilidad',
                data: [
                    ['Proyecto',   <?php echo number_format($respuesta1, 2, '.', '');?>],
                    ['Alternativa II', <?php echo number_format($respuesta2, 2, '.', '');?>]
                ]
            }]
        });
    });

});
		</script>

<div id="valorTasaRetorno"></div>

<div class="col-md-10 col-md-offset-1">
    <h1>Tasa De Retorno</h1>  

</div>
<div class="col-md-10 col-md-offset-1">

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <tr>
        <td></td>
        <td>Propuesta I</td>
        <td>Propuesta II</td>
    </tr>
    <tr>
        <td>Flujo De Efectivo</td>
        <td><?php  echo $flujoPro; ?></td>
        <td><?php  echo $flujoProAtl; ?></td>
    </tr>
    <tr>
        <td>Interés</td>
        <td><?php  echo  $interesPro; ?></td>
        <td><?php  echo  $interesProAtl; ?></td>
    </tr>
    <tr>
        <td>año</td>
        <td><?php  echo $anio; ?></td>
        <td><?php  echo $anioAtl; ?></td>
    </tr>
    <tr>
        <td>Cantidad Recuperada</td>
        <td><?php  echo $cantidadRecuperada; ?></td>
        <td><?php  echo $cantidadRecuperadaAtl; ?></td>
    </tr>
    <tr>
        <td>Saldo Inicial No Recuperado</td>
        <td><?php  echo  $saldoPro; ?></td>
        <td><?php  echo  $saldoProAtl; ?></td>
    </tr>
     <tr>
        <td>Saldo Final No Recuperado</td>
        <td><?php  echo $saldoFinalNoRecuperado; ?></td>
        <td><?php  echo $saldoFinalNoRecuperadoAtl; ?></td>
    </tr>
     <tr>
        <td>Interes Sobre Saldo No Recuperado</td>
        <td><?php  echo $interesSobreSaldoNoRecuperado; ?></td>
        <td><?php  echo $interesSobreSaldoNoRecuperadoAtl; ?></td>
    </tr>
</table>
</div>
	</body>
</html>

