

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
                <a class="navbar-brand" href="index.html">Prototipo Pipeline v0.1</a>
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                       
                         <!-- Interes -->
                       
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
               
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CALCULADORA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
     
       
                
                  
                  <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_interes">Tasa de Interes</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes_acumulado_cp1" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente1_cp1"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TasaInteres_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="tasainteres_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
               
               
       <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_generado">Interes Generado</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Saldo Pagado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_futuro_cp1" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente_cp1"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Interes_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="interes_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>          
                
       <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_rendimiento">Tasa de rendimento</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Interes Generado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes_acumulado_rendimiento_cp1" ></td>

									</tr>
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente_rendimiento_cp1"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TasaDeRendimiento_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="tasainteres_rendimiento_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>   
                   
                               
        <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_simple">Interes Simple</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente2_cp1" ></td>

									</tr>
									<tr>
										<td><label>Periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="numero_de_periodos_cp1"></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_de_interes_cp1"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="InteresSimple_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="interessimple_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>  
                   
             <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interes_compuesto">Interes compuesto</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Monto del prestamo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente3_cp1" ></td>

									</tr>
									<tr>
										<td><label>Periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="numero_de_periodos1_cp1"></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_de_interes1_cp1"></td>

									</tr>
									<!--
									<tr>
										<td><label>Interes acumulado</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interesA5"></td>

									</tr>
									-->
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="InteresCompuesto_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="interescompuesto_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                        <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="Flujo_efectivo_neto">Flujo de efectivo neto</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Entrada efectivo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="En_Efec_Ne_cp1" ></td>

									</tr>
									<tr>
										<td><label>Salida efectivo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="Sa_Efec_Ne_cp1"></td>

									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="FlujoEfectivoNeto_cp1();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="flujoefectivoneto_cp1"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>   
                   
         <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_futuro">Valor futuro</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Inversion inicial</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_futuro_cantidad_compuesta_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_futuro_compuesta_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
 
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_presente8">Valor presente (inversion inicial)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor futuro</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_futuro_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_2_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_2_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_presente_inversion_inicial_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_presente_inicial_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                    <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_presente9">Valor presente (De serie uniforme )</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anula uniforme</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_anual_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_3_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_3_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick= "valor_presente_serie_uniforme_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_serie_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
     <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="anual_uniforme">Valor anual uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anula uniforme</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_presente_2_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_4_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_4_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_anual_uniforme_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_anu_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                   <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="serie_anual_uniforme">Serie de Valor anual uniforme</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor futuro</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_futuro_2_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_5_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_5_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_anual_serie_uniforme_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_anu_serie_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                        
                    <!-- /.panel .chat-panel -->
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_futuro12">Valor Futuro (de la serie uniforme) </div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Valor anual</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="valor_anual_2_cp2" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_6_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_6_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="valor_futuro_serie_uniforme_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="valor_futu_serie_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
         <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->    
       <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="efectivo_añon">Flujo de efectivo en año n</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
                                    <tr>
                                        <td><label>Cantidad Base</label></td>
                                         <td><input id="cantidad_base_cp2" type="text" class="form-control col-xs-6"></td>

                                    </tr>
                           
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiante_cp2" ></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_7_cp2"></td>

									</tr>


								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary"  onclick="flujo_efectivo_anio_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="flujo_efec_anio_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form> 
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->   
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="Gradiente14">Gradiente aritmetico</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiante_2_cp2" ></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_7_cp2"></td>

									</tr>
									<tr>
										<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_8_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="gradiente_aritmetico_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="gradiente_arit_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
        </form>
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="valor_anual15">Serie anual uniforme (valor anual)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiante_3_cp2" ></td>

									</tr>
									<tr>
										<td><label>Periodo de tiempo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_9_cp2"></td>

									</tr>
								    <tr>
                                        <td><label>Tasa de interés</label></td>
                                         <td><input id="tasa_interes_8_cp2" type="text" class="form-control col-xs-6"></td>

                                    </tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="serie_anual_uniforme_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="serie_anu_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>       
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="factor16">Factor gradiente aritmetico, valor futuro</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Gradiente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="gradiante_4_cp2" ></td>

									</tr>
									<tr>
										<td><label>Interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes_9_cp2"></td>

									</tr>
									<tr>
									<td><label>Periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo_tiempo_10_cp2"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="factor_gradiente_aritmetico_cp2();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="factor_gra_uniforme_cp2"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
          <!-- aca comienza el div con el recuadro copienlo y peguenlo para las difernetes formulas -->
       <form>
            <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="interesn17">Tasa de interes nominal</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Interes por periodo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="ti_tasa_cp4" ></td>

									</tr>
							
									<td><label>Cantidad de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="ti_p_cp4"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Nominal_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="ti_cal_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                            <!-- aca comienza el div con el recuadro copienlo y peguenlo para        las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="efectiva">Tasa fectiva correspondiente por PC</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Tasa de interes nominal</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="te_r_cp4" ></td>

									</tr>
									<tr>
										<td><label>Frecuencia de composicion</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="te_m_cp4"></td>

									</tr>
									<tr>
									<td><label>Periodo de tiempo</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="te_t_cp4"></td>
									</tr>
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Efectiva_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="te_calc_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                            <!-- aca comienza el div con el recuadro copienlo y peguenlo para        las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                   <div id="final">valor futuro con una tasa efectiva</div>
                                    <!--<div id="final">Valor futuro al final de 1 año</div> -->
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                          <!--
                           <table class="table"> 
									<tr>
										<td><label>Valor presente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="presente19" ></td>

									</tr>
									<tr>
										<td><label>Interes acumulado durante el año</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes19"></td>

									</tr>
									<tr>
									<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodo19"></td>
									</tr>
									<tr>
									<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tasa_interes19"></td>
									</tr>
									<tr>
									<td><label>Valor presente</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="presente19"></td>
									</tr>
							
								</table>
                       -->
                        <table class="table"> 
									<tr>
										<td><label>Numero de Periodos de Capitalización por Año</label></td>
										 <td><input id="vf_m_cp4" type="text" class="form-control col-xs-6"></td>

									</tr>
									<tr>
										<td><label>Tasa de Interés Efectiva por Periodo de Composición </label></td>
										 <td><input id="vf_i_cp4" type="text" class="form-control col-xs-6"></td>

									</tr><tr>
										<td><label>Monto Principal</label></td>
										 <td><input id="vf_p_cp4" type="text" class="form-control col-xs-6"></td>

									</tr>
									
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Valor_Futuro_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="vf_calc_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>
     		<!-- aca comienza el div con el recuadro copienlo y peguenlo para    las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual20">Tasa de interes anual efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="t_pc_m_cp4" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="t_pc_cp4"></td>

									</tr>
					
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="Tasa_Interes_anual_Efectiva_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="t_pc_calc_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form> 
            <!-- aca comienza el div con el recuadro copienlo y peguenlo para    las difernetes formulas -->
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual21">Tasa de interes efectiva</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table"> 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tie_pc_m_cp4" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="tie_pc_i_cp4"></td>

									</tr>
					
							
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TI_Efectiva_Por_Pc_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="tie_pc_calc_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                               <!-- aca comienza el div con el recuadro copienlo y peguenlo para         las difernetes formulas -->                   
      <form>
           <div class="row">
                   <div class="" id="aws">
                    <div class="panel panel-primary" style="height:250px"  >
                        <div class="panel-heading">
                            <div class="row" >
                                <div class="col-xs-3">
                                    <div id="tasa_anual22">Tasa de interes anual efectiva (para tasa nominal)</div>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                           <table class="table">
                           <!-- 
									<tr>
										<td><label>Numero de periodos</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="periodos22" ></td>

									</tr>
									<tr>
										<td><label>Tasa de interes</label></td>
										 <td><input type="text" class="form-control col-xs-6" id="interes22"></td>

									</tr>
					
							-->
							<tr>
										<td><label>Tasa Anual Nominal</label></td>
										 <td><input id="ta_nom_cp4" type="text" class="form-control col-xs-6"></td>

									</tr>
								</table>
                        </a>
                         
                    </div>
                           
                            <div class="panel-footer row">
								<table class="table"> 
									<tr>
										 <td><button class="btn btn-primary" onclick="TIE_Para_Capitalizacion_Continua_cp4();">Calcular</button></td>
										 <td><input type="text" class="form-control col-xs-3" id="ta_nom_calc_cp4"></td>

									</tr>
								</table>
								  	

                            </div>
                </div>
                
              
        </div>
     </form>                                                                                                                                             
                                                                              
                </div>
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
    <!-- Funciones javascript -->
    <script type="text/javascript" src="../js/CalculadoraPrincipal.js"></script>

</body>

</html>
