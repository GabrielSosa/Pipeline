<?php

			

				//conexion a bd
$conexion = new mysqli('localhost','root','','db_sistem_negocio');

if($conexion->connect_errno){ return null ;}

$idproyecto="4";


?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
#container {
	height: 400px; 
	min-width: 310px; 
	max-width: 800px;
	margin: 0 auto;
}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: false,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Interes Compuesto'
        },
        subtitle: {
            text: 'Variación del Interés Compuesto por Periodo'
        },
        plotOptions: {
            column: {
                depth: 25
            }
			
			
			
        },
        xAxis: {
            categories: [
			<?php
				$conexion = new mysqli('localhost','root','','db_sistem_negocio');
				$query="SELECT * FROM tbl_interes_compuesto  where id_proyecto = $idproyecto order by periodo";
				$resultado = $conexion->query($query);
				while($row = mysqli_fetch_assoc($resultado)){	
			?>
                '<?php echo "Periodo ".$row["periodo"] ?>',
                <?php
	            }
	            mysqli_free_result($resultado);
	        	mysqli_close($conexion);

            ?>
			]
			
			
			
        }
		,
        yAxis: {
            title: {
                text: 'Monto Pagado'
            }
        },
        series: [{
            name: 'Monto Pagado por Periodo L.',
            data: [
			
			<?php
				$conexion = new mysqli('localhost','root','','db_sistem_negocio');
				$query="SELECT * FROM tbl_interes_compuesto  where id_proyecto = $idproyecto order by periodo";
				$resultado = $conexion->query($query);
				while($row = mysqli_fetch_assoc($resultado)){			
			?>			
					 
					<?php echo $row["monto_pagado"] ?>,
					
			<?php
			}
			mysqli_free_result($resultado);
	        mysqli_close($conexion);

			?>
			]
			
			
			
			
        }]
		
		
		
		
		
		
    });
});
		</script>
	</head>
	<body>
	<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
	</body>
</html>
