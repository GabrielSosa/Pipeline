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
    
          <div class="col-lg-12">
              <h1 class="page-header">Ingrese Datos del Proyecto</h1>
          </div>
                <!-- /.col-lg-12 -->
      <form id="loginForm" method="post" class="form-horizontal" action="Backend/registrarProyecto.php">
                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Nombre del Proyecto</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Detalla el nombre" pattern="[(a-z)|(A-Z)|(\s)|(á)|(é)|(i)|(ó)|(ú)]*" class="form-control" name="nombreProyecto" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Descripcion</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Detalla en que consiste el proyecto" pattern="[(a-z)|(A-Z)|(\s)|(á)|(é)|(i)|(ó)|(ú)]*" class="form-control" name="descripcion" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Períodos</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Cantidad de periodos en que trabajara" pattern = "[0-9]+" class="form-control" name="n" onkeypress="return isNumberKey(event)" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Tiempo en Meses</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Cantidad de meses que trabajara" pattern = "[0-9]+" class="form-control" name="t" onkeypress="return isNumberKey(event)" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Interés</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Interes que necesitas pagar en %" pattern = "[0-9]+" class="form-control" name="i" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Monto del Préstamo</label>
                                        <div class="col-xs-5">
                                            <input type="text" placeholder="Cantidad de dinero prestado para el proyecto" pattern = "[0-9]+" class="form-control" name="montoPrestamo" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">Fecha de Inicio</label>
                                        <div class="col-xs-5">
                                            <input type="date" placeholder="Fecha en que inicias el proyecto" class="form-control" name="fechaInicio" required/>
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