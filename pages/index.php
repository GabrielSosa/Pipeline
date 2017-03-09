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

<?php 
session_start();
    if (!isset($_SESSION['usuario']) AND $_SESSION['usuario'] != 1) {
        header("location: login.php");
        exit;
        }

?>

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
                <a class="navbar-brand" href="index.php"><img src="../images/pipeline.png" alt="" style="width: 100px; height: 30px;" /></a>
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
                        <i class="fa fa-user fa-fw"></i> <?php echo "Hola  ".$_SESSION['usuario']."     "; ?><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        

                        <li>
                            <a href="#"><i class="fa fa-fw"></i>Interes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="calculadora.php#interes_simple">Simple</a>
                                </li>                    
                                <li>
                                    <a href="calculadora.php#interes_generado">Generado</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#interes_compuesto">Compuesto</a>
                                </li>
                                
                            </ul>

                        </li>
                        
                        <!-- Tasas -->
                        
                        
                              <li>
                            <a href="#"><i class="fa  fa-fw"></i>Tasas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="calculadora.php#tasa_interes">Tasa de Interes</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#tasa_rendimiento">Tasa de rendimiento</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#interesn17">Tasa de interes Norminal</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#tasa_anual20">Tasa de interes anual efectiva</a>
                                </li>
                          
                                 <li>
                                    <a href="calculadora.php#tasa_anual21">Tasa de interes efectiva por periodo</a>
                                </li>
                                 <li>
                                    <a href="calculadora.php#tasa_anual22">Tasa de interes anual efectiva para tasa nominal</a>
                                </li>
                                  <li>
                                    <a href="calculadora.php#efectiva">Tasa efectiva correspondiente por PC</a>
                                </li>
                                
                            </ul>

                        </li>
                     
                     <!-- flujos -->
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Flujos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="calculadora.php#Flujo_efectivo_neto">Flujo de efectivo neto</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#efectivo_añon">Flujo de efetivo en el año n</a>
                                </li>                                                    
                            </ul>

                        </li>
                      <!--valores  -->   
                       <li>
                            <a href="#"><i class="fa  fa-fw"></i>Valores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="calculadora.php#valor_presente">Valor Presente</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#valor_futuro">Valor futuro</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#valor_anual10"> Valore presente para valor anual uniforme</a>
                                </li>
                                <li>
                                    <a href="calculadora.php#valor_futuro12"> Valore futuro de serie anual uniforme</a>
                                </li>           
                                <li>
                                    <a href="calculadora.php#valor_presente9">Valor anual uniforme</a>
                                </li> 
                                  <li>
                                    <a href="calculadora.php#anual_uniforme">Serie de valor anual uniforme</a>
                                </li> 
                                 <li>
                                    <a href="calculadora.php#valor_anual15">Serie anual uniforme (valor anual)</a>
                                </li> 
                                 <li>
                                    <a href="calculadora.php#Gradiente14">Gradiente aritmetico para los años presente</a>
                                </li> 
                                <li>
                                    <a href="calculadora.php#factor16">Factor gradiente aritmetico, valor futuro</a>
                                </li>                                           <li>
                                    <a href="calculadora.php#final">Valor futuro al final del 1 año</a>
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
                
               <div class="btn-group" style="margin-bottom: 30px"> 
                     

                
                    <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Agregar Proyecto</button>
                

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title">Registrar Proyecto</h5>
                            </div>

                            <div class="modal-body">
                                <!-- The form is placed inside the body of modal -->
                                <form id="loginForm" method="post" class="form-horizontal" action="registrarProyecto.php">
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
                    </div>
                </div>

                <script>
                $(document).ready(function() {
                    $('#loginForm').formValidation({
                        framework: 'bootstrap',
                        excluded: ':disabled',
                        icon: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },
                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: 'The username is required'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: 'The password is required'
                                    }
                                }
                            }
                        }
                    });
                });
                </script>


                    <button  name="go2" onclick=" location.href='calculadora.php' " class="btn btn-primary" >Calculadora</button>
                </div>
                
                
                
            </ul>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            
            <?php 

include '../Backend/conexion.php';

require_once( '../Backend/conexion.php');

$conexion = new Conexion();

$usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);
    //  obtenermos la cantidad de registros de la consulta
    $usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $idUsuario = $usuarioQ[0];

$queryProyectos="SELECT * FROM tbl_proyectos WHERE id_usuario = '".$idUsuario."';";
$results= mysqli_query($conexion->getConexion(), $queryProyectos);
$contador = 0;
foreach ($results as $result) {
    $contador++;
    echo 
    '<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">'.$contador.'</div>
                                    <div>'.$result['nombre_proyecto'].'</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>';
}

            ?>



            

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

    <script src="../js/CalculadoraPrincipal.js"></script>

</body>

</html>
