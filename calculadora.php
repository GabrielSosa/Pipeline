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
		<div class="row">
		  <div class="col-lg-12">
			<section class="panel">
                        <header class="panel-heading custom-tab dark-tab">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a data-toggle="tab" href="#home4">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a data-toggle="tab" href="#interes4">
                                        <i class="fa fa-credit-card"></i>
                                        INTERESES
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#tasas4">
                                        <i class="fa fa-university "></i>
                                        TASAS
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#flujos4">
                                        <i class="fa fa-line-chart"></i>
                                        FLUJOS
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#valores4">
                                        <i class="fa fa-bar-chart"></i>
                                        VALORES
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="home4" class="tab-pane ">
                                    Home
                                </div>
                                <div id="interes4" class="tab-pane active">
                                	<!--Row-->
                                	<div class="row">
                                		<div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-money fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>INTERES SIMPLE</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#interesSimple" >Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#interesSimple"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>

                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-line-chart fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>INTERES COMPUESTO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#interesCompuesto" >Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#interesCompuesto"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-pie-chart fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>INTERES GENERADO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#interesGenerado">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#interesGenerado"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                	</div>
                                	<!--Finaliza Row-->
                                </div>
                                <?php include('modal/intereses.php');?>

                                <div id="tasas4" class="tab-pane ">
				             		<!--Row-->
                                	<div class="row">
                                		<div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-jpy fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>TASA DE INTERES</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#TasaInteres">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#TasaInteres"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-bar-chart fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>TASA DE RENDIMIENTO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#TasaRendimiento">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#TasaRendimiento"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-area-chart fa-4x" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>TASA DE INTERES NOMINAL</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#TasaNominal">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#TasaNominal"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-money fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>INTERES ANUAL EFECTIVA</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#AnualEfectiva">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#AnualEfectiva"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-university fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>TASA DE INTERÉS ANUAL EFECTIVA</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#EfectivaPorPeriodo">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#EfectivaPorPeriodo"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-calculator fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>TASA ANUAL EFECTIVA POR PERIODO DE COMPOSICIÓN</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#AE_TasaNominal">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#AE_TasaNominal"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                	</div>
                                	<!--Finaliza Row-->
				             	</div>

                                <?php include('modal/tasas.php');?>

				             	<div id="flujos4" class="tab-pane">
				             		<!--Row-->
                                	<div class="row">
                                		<div class="col-lg-3 col-md-6 col-md-offset-2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-credit-card fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>EFECTIVO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#Efectivo">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#Efectivo"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-handshake-o fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>EFECTIVO EN EL AÑO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#EfectivoAnio">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#EfectivoAnio"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         
                                	</div>
                                	<!--Finaliza Row-->	
				             	</div>

                                <?php include('modal/flujos.php');?>


				             	<div id="valores4" class="tab-pane">
				             		<!--Row-->
                                	<div class="row">
                                		<div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-cc-visa fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR PRESENTE</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#valorPresente">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#valorPresente"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-eur fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR FUTURO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#valorFuturo">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#valorFuturo"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-usd fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR PRESENTE DE SERIE UNIFORME</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#VP_Serie">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#VP_Serie"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-cc-mastercard fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR ANUAL UNIFORME</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#anual_Uniforme">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#anual_Uniforme"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-cc-discover fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>SERIE DE VALOR ANUAL UNIFORME</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#Serie_Anual_Uniforme">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#Serie_Anual_Uniforme"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6 ">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-pie-chart fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR FUTURO DE SERIE UNIFORME</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#futuroUniforme">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#futuroUniforme"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6 col-md-offset-1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-btc fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>GRADIENTE ARITMÉTICO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#gradiente">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#gradiente"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-university fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>FACTOR GRADIENTE ARITMÉTICO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#factorGradiente">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#factorGradiente"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <i class="fa fa-money fa-4x"></i>
                                                        </div>
                                                        <div class="col-xs-9 text-right">
                                                            <div>VALOR FUTURO DURANTE UN AÑO</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <div class="panel-footer">
                                                        <span class="pull-left" data-toggle="modal" data-target="#futuroUnAnio">Calcular</span>
                                                        <span class="pull-right" data-toggle="modal" data-target="#futuroUnAnio"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                         </div>
                                	</div>
                                	<!--Finaliza Row-->
				             	</div>

                                <?php include('modal/valores.php');?>



                             </div>
                 		</div> 
                </section>
                              
            </div>        
		</div>
	</div>
    	

</div>



</section>

<?php echo scripts(); ?>
</body>
</html>