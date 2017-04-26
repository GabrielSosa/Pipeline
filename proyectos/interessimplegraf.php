<?php


$idproyecto=$_SESSION['id_proyecto'];

?>


		
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
            text: 'Comparando el total a pagar con el interés simple'
        },
        subtitle: {
            text: ''
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
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";

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
                text: 'Total a pagar'
            }
        },
        series: [{
            name: 'Total a Pagar L.',
            data: [
			
			<?php
				$conexion = new Conexion();
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";
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
			
			
			
			
        },{
            name: 'Interes L.',
            data: [
			
			<?php
				$conexion = new Conexion();
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";
				$resultado= mysqli_query($conexion->getConexion(), $query);
				while($row = mysqli_fetch_assoc($resultado)){			
			?>			
					 
					<?php echo $row["interes"] ?>,
					
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
	



<div id="container" style="height: 400px"></div>

