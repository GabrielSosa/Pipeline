<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pipeline - Industria del Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pipeline</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
               
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Pantalla Principal</a>
                        </li>
                        

                        <li>
                            <a href="#"><i class="fa fa-fw"></i>Interes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#interes_simple">Simple</a>
                                </li>                    
                                <li>
                                    <a href="#interes_generado">Generado</a>
                                </li>
                                <li>
                                    <a href="#interes_compuesto">Compuesto</a>
                                </li>
                                
                            </ul>

                        </li>
                        
                        <!-- Tasas -->
                        
                        
                              <li>
                            <a href="#"><i class="fa  fa-fw"></i>Tasas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#tasa_interes">Tasa de Interes</a>
                                </li>
                                <li>
                                    <a href="#tasa_rendimiento">Tasa de rendimiento</a>
                                </li>
                                <li>
                                    <a href="#interesn17">Tasa de interes Norminal</a>
                                </li>
                                <li>
                                    <a href="#tasa_anual20">Tasa de interes anual efectiva</a>
                                </li>
                          
                                 <li>
                                    <a href="#tasa_anual21">Tasa de interes efectiva por periodo</a>
                                </li>
                                 <li>
                                    <a href="#tasa_anual22">Tasa de interes anual efectiva para tasa nominal</a>
                                </li>
                                  <li>
                                    <a href="#efectiva">Tasa efectiva correspondiente por PC</a>
                                </li>
                                
                            </ul>

                        </li>
                     
                     <!-- flujos -->
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Flujos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#Flujo_efectivo_neto">Flujo de efectivo neto</a>
                                </li>
                                <li>
                                    <a href="#efectivo_añon">Flujo de efetivo en el año n</a>
                                </li>                                                    
                            </ul>

                        </li>
                      <!--valores  -->   
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Valores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#valor_presente">Valor Presente</a>
                                </li>
                                <li>
                                    <a href="#valor_futuro">Valor futuro</a>
                                </li>
                                <li>
                                    <a href="#valor_anual10"> Valore presente para valor anual uniforme</a>
                                </li>
                                <li>
                                    <a href="#valor_futuro12"> Valore futuro de serie anual uniforme</a>
                                </li>           
                                <li>
                                    <a href="#valor_presente9">Valor anual uniforme</a>
                                </li> 
                                  <li>
                                    <a href="#anual_uniforme">Serie de valor anual uniforme</a>
                                </li> 
                                 <li>
                                    <a href="#valor_anual15">Serie anual uniforme (valor anual)</a>
                                </li> 
                                 <li>
                                    <a href="#Gradiente14">Gradiente aritmetico para los años presente</a>
                                </li> 
                                <li>
                                    <a href="#factor16">Factor gradiente aritmetico, valor futuro</a>
                                </li>                                           <li>
                                    <a href="#final">Valor futuro al final del 1 año</a>
                                </li>                  
                            </ul>

                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">


                     
                    <h1 class="page-header">Dashboard</h1>
                    
                    

                    <ul class="nav navbar-top-links navbar-right">
                
               <div class="btn-group"> 
                    <button type="submit" name="go" class="btn btn-primary">Agregar Proyecto</button>
                    <button type="submit" name="go2" class="btn btn-primary">Calculadora</button>
                </div>
                
                
                
            </ul>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <form method="post" action="../Backend/validar.php" role="login">
            <img src="../images/user.png" alt="" />
            <input type="usuario" name="email" required placeholder="Usuario" class="form-control input-lg" />
            <input type="password" name="password" required placeholder="Password" class="form-control input-lg" />
            <button type="submit" name="go" class="btn btn-block btn-info">Login</button>
            <input type="checkbox" name="remember" value="1" checked /> Recordarme
            <a href="#" class="pull-right">Ayuda</a>
        </form>
                </div>
            </div>
            <!-- /.row -->
            
                    <!-- /.panel .chat-panel -->
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
