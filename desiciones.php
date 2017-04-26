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
<div class="main-content">

  <?php echo Encabezado(); ?>
  
<div class="wrapper">
    <div class="col-lg-16" >
        <h1 class="page-header">Desicion</h1>
    </div>


  
<?php
// echo '<dir id="fotos"></dir>';
$idProyecto = $_GET[idProyecto];
if (isset($idProyecto)){ 

include 'Backend/conexion.php';
require_once( 'Backend/conexion.php');
$conexionDesicion = new Conexion();
$query_ds="SELECT * FROM tbl_resultados where id_proyecto=".$idProyecto;
$results= mysqli_query($conexionDesicion->getConexion(), $query_ds);

$ValorAnual = 15;
foreach ($results as $resultado) {
    $ValorAnual= $resultado['valor_presente'];
}

if($ValorAnual>0){
  echo'<link rel="stylesheet" type="text/css" href="animacion/cssani/animation.css">';
  echo'<dir id="fotos"></dir>';
}else{
  echo'<link rel="stylesheet" type="text/css" href="animacion/cssani/animation2.css">';
  echo'<dir id="fotos2"></dir>';
}

$conexionDesicion->cerrarConexion();

}else{
 header("location:/pipeline/index.php"); 
  
}
//header("location:/pipeline/index.php"); 

?>


</div>	

</div>

</section>

<?php echo scripts(); ?>

</body>
</html>