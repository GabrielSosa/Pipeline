<!DOCTYPE html>

<?php
    include('menu.php');

?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="Clase de Industria">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  <?php echo css();?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

    <title>Pipeline</title>
</head>
<body class="sticky-header">
<?php echo menu(); 
  include 'Backend/conexion.php';
  require_once( 'Backend/conexion.php');
  $conexion = new Conexion();
  $id = $_SESSION['id_proyecto'];

  $usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);
    //  obtenermos la cantidad de registros de la consulta
    $usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $idUsuario = $usuarioQ[0];
    $array;
  if(isset($id)) {
  
    $sql= mysqli_query($conexion->getConexion(), "SELECT * FROM TBL_PROYECTOS WHERE ID_PROYECTO='$id' " );
    $array= mysqli_fetch_array( $sql);
    if($array['id_usuario']==$idUsuario){
    }else{  
      echo "<script>location.href=' index.php' </script>"; // redirigir al login si es incorrecto
      echo "<script>alert('Acceso invalido') </script>";
      
    }
      
  }else{
    header("location: index.php");
  }
  ?>
<!-- main content start-->
<div class="main-content" >

    <?php echo Encabezado(); ?>
    <div class="wrapper">
      <div class="col-lg-12">
         <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Graficos: <?php echo $array['nombre_proyecto']; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Interes Simple
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php require('proyectos/interessimplegraf.php');?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Costo Capitalizado
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php 
                            $idproyecto=$_SESSION['id_proyecto'];


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

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
              
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Interes Compuesto
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php require('proyectos/Interescompuestograf.php');?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>

    </div>
    </div>
    
</div>
<?php echo scripts(); ?>
<!-- Esta seccion es para graficoos"></script> -->
<script src="proyectos/Highcharts-4.1.5/js/highcharts.js"></script>
<script src="proyectos/Highcharts-4.1.5/js/modules/exporting.js"></script>	
</body>
</html>
