<?php

$idproyecto=$_SESSION['id_proyecto'];

?>
<style type="text/css">
	#container2 {
	height: 400px; 
	min-width: 800px; 
	max-width: 800px;
	margin: 0 auto;
}

</style>
<script type="text/javascript">
$(function () {
    $('#container2').highcharts({
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
				$conexion = new Conexion();
				$query="SELECT * FROM tbl_interes_compuesto  where id_proyecto = $idproyecto order by periodo";
				$resultado= mysqli_query($conexion->getConexion(), $query);
				while($row = mysqli_fetch_assoc($resultado)){	
			?>
                '<?php echo "Periodo ".$row["periodo"] ?>',
                <?php
	            }
	            mysqli_free_result($resultado);
	        	$conexion->cerrarConexion();

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
				$conexion = new Conexion();
				$query="SELECT * FROM tbl_interes_compuesto  where id_proyecto = $idproyecto order by periodo";
				$resultado= mysqli_query($conexion->getConexion(), $query);
				while($row = mysqli_fetch_assoc($resultado)){			
			?>			
					 
					<?php echo $row["monto_pagado"] ?>,
					
			<?php
			}
			mysqli_free_result($resultado);
	        $conexion->cerrarConexion();

			?>
			]
			
			
			
			
        }]
		
		
		
		
		
		
    });
});
</script>


<div id="container2" style="height: 400px"></div>

