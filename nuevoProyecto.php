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

      <form id="loginForm" method="post" class="form-horizontal" action="Backend/registrarProyecto.php">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Nombre del Proyecto</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="nombreProyecto" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Descripcion</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="descripcion" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">n (Períodos)</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="n" onkeypress="return isNumberKey(event)"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">t (Tiempo en Meses)</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="t" onkeypress="return isNumberKey(event)"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">i (Interés)</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="i" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Monto del Préstamo</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="montoPrestamo" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Saldo Pagado</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="saldoPagado" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Entrada de Efectivo</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="entradaEfectivo" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Salida de Efectivo</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="salidaEfectivo" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Gradiente</label>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control" name="gradiente" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-5 col-xs-offset-3">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </form>

  </div>  

</div>

</section>

<?php echo scripts(); ?>
</body>
</html>