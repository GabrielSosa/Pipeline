<?php


$idproyecto=$_GET['id'];

$conexion = new Conexion();
$querycostograf="SELECT costo_capitalizado_1, costo_capitalizado_2 FROM tbl_resultados  where id_proyecto = $idproyecto";
$resultadograf = mysqli_query($conexion->getConexion(), $querycostograf);

foreach ($resultadograf as $resultgraf) {
     $costo_capitalizado_1 = $resultgraf['costo_capitalizado_1'];
     $costo_capitalizado_2 = $resultgraf['costo_capitalizado_2'];
}
$respuesta =$costo_capitalizado_1+$costo_capitalizado_2;
$respuesta1 = ($costo_capitalizado_1/$respuesta)*100;
$respuesta2 = ($costo_capitalizado_2/$respuesta)*100;

?>
        

<style type="text/css">
    #costoCapitalizado {
    height: 400px; 
    min-width: 800px; 
    max-width: 800px;
    margin: 0 auto;
}

</style>
<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        $('#costoCapitalizado').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Costo Capitalizado comparado con Propuesta II'
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

<div id="costoCapitalizado"></div>

	</body>
</html>
