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
							<li class="">
                               <a data-toggle="tab" href="#home4">
                                    <i class="fa fa-home"></i>
                            	</a>
                            </li>
                            <li class="active">
                            	<a data-toggle ="tab" href="#interesS4">
                            		<i class="fa fa-credit-card"></i>
                            		INTERES SIMPLE
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#home4">
                                    <i class="fa fa-line-chart"></i>
                                    INTERES COMPUESTO
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#home4">
                                    <i class="fa fa-pie-chart"></i>
                                    VALOR PRESENTE
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#home4">
                                    <i class="fa fa-area-chart"></i>
                                    INVERSION PERMANENTE
                            	</a>
                            </li>
                            <li class="">
                               <a data-toggle="tab" href="#home4">
                                    <i class="fa fa-home"></i>
                                    TASA DE RETORNO
                            	</a>
                            </li>
						</ul>
					</header>
					
					<div class="panel-body">
						<div class="tab-content">
                            
                            <div id="home4" class="tab-pane ">
                                Home
                            </div>

                            <div id="interesS4" class="tab-pane active">
                            	
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

</html>