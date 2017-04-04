<?php

			

				//conexion a bd
$coneccion = new mysqli('localhost','root','','db_sistem_negocio');

if($coneccion->connect_errno){ return null ;}

$idproyecto=$_GET['id'];

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
				$conexion = new mysqli('localhost','root','','db_sistem_negocio');
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";
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
                text: 'Total a pagar'
            }
        },
        series: [{
            name: 'Total a Pagar L.',
            data: [
			
			<?php
				$conexion = new mysqli('localhost','root','','db_sistem_negocio');
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";
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
			
			
			
			
        },{
            name: 'Interes L.',
            data: [
			
			<?php
				$conexion = new mysqli('localhost','root','','db_sistem_negocio');
				$query="SELECT * FROM tbl_interes_simple  where id_proyecto = $idproyecto order by periodo";
				$resultado = $conexion->query($query);
				while($row = mysqli_fetch_assoc($resultado)){			
			?>			
					 
					<?php echo $row["interes_simple"] ?>,
					
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
	



<div id="container" style="height: 400px"></div>

