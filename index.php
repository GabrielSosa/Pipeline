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

  <?php echo css(); ?>


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

	<title>Pipeline</title>
</head>

<body class="sticky-header">

<section>
<?php echo menu(); ?>
<!-- main content start-->
<div class="main-content" >

	<?php echo Encabezado(); ?>

	<!-- page heading start-->
       <div >
       
        </div>
      <!-- page heading end-->

	<div class="wrapper">


<?php
include 'Backend/conexion.php';

require_once( 'Backend/conexion.php');

$conexion = new Conexion();

$usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);
    //  obtenermos la cantidad de registros de la consulta
    $usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $idUsuario = $usuarioQ[0];

$queryProyectos="SELECT * FROM tbl_proyectos where id_usuario = $idUsuario";
$results= mysqli_query($conexion->getConexion(), $queryProyectos);
$contador = 0;
foreach ($results as $result) {
    $contador++;
    echo 
    '
                <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-line-chart fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>'.$result['nombre_proyecto'].'</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="proyectos.php?id='.$result['id_proyecto'].'">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#interesCompuesto" >Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#interesCompuesto"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>';
}

            ?>



	</div>	

</div>

</section>

<?php echo scripts(); ?>
</body>
</html>