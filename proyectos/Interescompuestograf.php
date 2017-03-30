<?php

			

				//conexion a bd
$coneccion = new mysqli('localhost','root','','db_sistem_negocio');

if($coneccion->connect_errno){ return null ;}

$idproyecto="4";
$query='SELECT * FROM `tbl_interes_compuesto`  where id_proyecto ='.$idproyecto.' order by periodo';

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

	
	$resultado = $coneccion->query($query);
	while($row = mysqli_fetch_array($resultado, MYSQLI_NUM))
		{


		
?>					
			
			['<?php echo $row[3]; ?>',],
<?php
}

?>
			]
			
			
			
        }
		
		
		
		
		,
        yAxis: {
            title: {
                text: ''
            }
        },
        series: [{
            name: 'interes compuesto',
            data: [
			
			<?php
		$resultado = $coneccion->query($query);
		while($row = mysqli_fetch_array($resultado, MYSQLI_NUM))
			{			
?>			
			 
			[<?php echo $row[7] ?>],
			
<?php
}
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
