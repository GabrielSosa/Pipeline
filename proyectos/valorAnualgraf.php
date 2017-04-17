
<?php


$idproyecto=$_GET['id'];

$conexion = new Conexion();
$querycostograf="SELECT * FROM tbl_comparacion_valor_anual  where id_proyecto = $idproyecto";
$resultadograf = mysqli_query($conexion->getConexion(), $querycostograf);

foreach ($resultadograf as $resultgraf) {
     $costo_inicial_1 = $resultgraf['costo_inicial_1'];
     $costo_inicial_2 = $resultgraf['costo_inicial_2'];
     $interes_1 = $resultgraf['interes_1'];
     $interes_2 = $resultgraf['interes_2'];
     $periodo_1 = $resultgraf['periodo_1'];
     $periodo_2 = $resultgraf['periodo_2'];
     $valor_salvamiento_1 = $resultgraf['valor_salvamiento_1'];
     $valor_salvamiento_2 = $resultgraf['valor_salvamiento_2'];
     $valor_anual_1 = $resultgraf['valor_anual_1'];
     $valor_anual_2 = $resultgraf['valor_anual_2'];
}
if($valor_anual_1 < 0){
    $valor_anual_1 = -1*$valor_anual_1;
}
if($valor_anual_2 < 0){
    $valor_anual_2 = -1*$valor_anual_2;
}
$respuesta =$valor_anual_1+$valor_anual_2;
$respuesta1 = ($valor_anual_1/$respuesta)*100;
$respuesta2 = ($valor_anual_2/$respuesta)*100;
?>
        



<style type="text/css">
    #valorAnual {
    height: 400px; 
    min-width: 800px; 
    max-width: 800px;
    margin: 0 auto;
}

</style>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        $('#valorAnual').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Valor Anual con Propuesta II'
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

<div id="valorAnual"></div>

<div class="col-md-10 col-md-offset-1">
    <h1>Valor Anual</h1>  

</div>
<div class="col-md-10 col-md-offset-1">

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <tr>
        <td></td>
        <td>Propuesta I</td>
        <td>Propuesta II</td>
    </tr>
    <tr>
        <td>Costo Inicial</td>
        <td><?php  echo $costo_inicial_1; ?></td>
        <td><?php  echo $costo_inicial_2; ?></td>
    </tr>
    <tr>
        <td>Interés</td>
        <td><?php  echo $interes_1; ?></td>
        <td><?php  echo $interes_2; ?></td>
    </tr>
    <tr>
        <td>Valor de Salvamento</td>
        <td><?php  echo $valor_salvamiento_1; ?></td>
        <td><?php  echo $valor_salvamiento_2; ?></td>
    </tr>
    <tr>
        <td>Vida, Años</td>
        <td><?php  echo $periodo_1; ?></td>
        <td><?php  echo $periodo_2; ?></td>
    </tr>
    <tr>
        <td>Valor Anual</td>
        <td><?php  echo $valor_anual_1; ?></td>
        <td><?php  echo $valor_anual_2; ?></td>
    </tr>
</table>
</div>
	</body>
</html>

