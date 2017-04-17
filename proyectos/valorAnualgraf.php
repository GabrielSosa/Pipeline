<?php


$idproyecto=$_GET['id'];

$conexion = new Conexion();
$querycostograf="SELECT valor_anual_1, valor_anual_2 FROM tbl_comparacion_valor_anual  where id_proyecto = $idproyecto";
$resultadograf = mysqli_query($conexion->getConexion(), $querycostograf);

foreach ($resultadograf as $resultgraf) {
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
echo $respuesta1;
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

	</body>
</html>
