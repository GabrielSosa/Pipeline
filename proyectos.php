<!DOCTYPE html>
<?php
	include('menu.php');
  $_SESSION['id_proyecto']=$_GET['id'];

?>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="Clase de Industria">
  <link rel="stylesheet" href="css/EstiloModal.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <style type="text/css">

${demo.css}
    </style>

  <?php echo css(); 


  include 'Backend/conexion.php';
  require_once( 'Backend/conexion.php');
  $conexion = new Conexion();
  $id = $_GET['id'];

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

<div class="main-content" >
	<?php echo Encabezado(); ?>

<!-- page heading start-->
   <div >
   
    </div>
  <!-- page heading end-->

	<div class="wrapper">
  <div class="col-lg-12" style="margin-bottom: 0px">
        <h2 class="page-header">Proyecto: <?php echo $array['nombre_proyecto']; ?></h1>
        <!--<p>Descripcion: <?php //echo $array['descripcion']; ?></p>!-->
    </div>
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading custom-tab dark-tab">
						<ul class="nav nav-tabs">
							
                            <li class="active">
                            	<a data-toggle ="tab" href="#interesS4">
                            		<i class="fa fa-credit-card"></i>
                            		INTERES SIMPLE
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#intersC4">
                                    <i class="fa fa-line-chart"></i>
                                    INTERES COMPUESTO
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#CostoC4">
                                    <i class="fa fa-pie-chart"></i>
                                    COSTO CAPITALIZADO
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#inversionP4">
                                    <i class="fa fa-area-chart"></i>
                                    INVERSION PERMANENTE
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#tasaR4">
                                    <i class="fa fa-jpy"></i>
                                    TASA DE RETORNO
                            	</a>
                            </li>

                            <li class="">
                               <a data-toggle="tab" href="#comparacionVA">
                                    <i class="fa fa-home"></i>
                                    VALOR ANUAL
                              </a>
                            </li>
						</ul>
					</header>
					
					<div class="panel-body">
						<div class="tab-content">
                            
                            <div id="home4" class="tab-pane ">
                                Home
                               <?php echo $_SESSION['id_proyecto']; ?>
                            </div>

                            <div id="interesS4" class="tab-pane active">
                              <?php require('proyectos/interessimplegraf.php');?>
                            	<?php include('proyectos/interesSimple.php');?>
                            </div>

                            <div id="intersC4" class="tab-pane"> 
                              <?php require('proyectos/Interescompuestograf.php');?>
                              <?php include('proyectos/interesCompuesto.php');?>                                
                            </div> 

                            <div id="CostoC4" class="tab-pane"> 
                              <?php include('proyectos/costoCapitalizado.php');?>                              
                            </div> 
                            
                            <div id="inversionP4" class="tab-pane"> 
                              <!--Aqui debe incluirse el codigo de la inversion permaneteusar como ejemplo costo capitalizdo como las otras-->                             
                            </div> 
                            
                             <div id="tasaR4" class="tab-pane"> 
                               <?php include('proyectos/tasaDeRetorno.php');?>
                              <!--Aqui debe incluirse el codigo de Tasa de retorno usar como ejemplo costo capitalizdo como las otras-->                             
                            </div>

                            <div id="comparacionVA" class="tab-pane"> 
                            <?php include('proyectos/valorAnual.php');?>
                              <!--Aqui debe incluirse el codigo de comparacion Valor Anual usar como ejemplo costo capitalizdo como las otras-->                     
                            </div>
						</div>
					</div>
				</section>
			</div>
		</div>		
	</div>

</div>

</section>

</body>


<?php echo scripts(); ?>
<!-- Esta seccion es para graficoos"></script> -->
<script src="proyectos/Highcharts-4.1.5/js/highcharts.js"></script>
<script src="proyectos/Highcharts-4.1.5/js/highcharts-3d.js"></script>
<script src="proyectos/Highcharts-4.1.5/js/modules/exporting.js"></script>

<!--Esta seccion es para llamar modales -->
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/scriptsModal.js"></script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
</script>

</html>