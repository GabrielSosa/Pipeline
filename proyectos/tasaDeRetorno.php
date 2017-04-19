<?php 
// Abrimos la conexion a la base de datos  

$conexionTasa = new Conexion();
$idProyectoTasaDeRetorno = $_GET['id'];
$query_Tasa = "SELECT * FROM tbl_tasa_retorno WHERE id_proyecto =$idProyectoTasaDeRetorno";


$resultadoTasa = mysqli_query($conexionTasa->getConexion(), $query_Tasa);

//echo $resultadoCost;
 
$row= mysqli_fetch_array($resultadoTasa, MYSQLI_NUM);

$Tasa = $row[0];

if($Tasa != 0)
{
    include('proyectos/tasaDeRetornoGraf.php');
   

}
else
{
     echo '<br><p style="text-align:center;height: 80px;" >Tasa De Retorno 3 Periodos : <a href="#" data-id="1" data-toggle="modal" data-target="#myModalTa">Tasa de Retorno</a>.</p>';
}


?>

<!--Aqui el tercer modal de interes generado--> 

<div id="centrado">
    <div class="modal fade" id="myModalTa" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">Tasa de Retorno</h5>
                    </div>


                     <div class="modal-body">
                    <form role="form" action="proyectos/ejecutarTasaDeRetorno.php" method="post" class="f1">
                        <h3>Registro de Tasa de Retorno</h3>
                        <p>Ingresa Tasa De Retorno Para 3 Peridos</p>
                     
                            
                            <h4>Periodo 1:</h4>
                           
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesPro" placeholder="Interés" class="form-control" id="interesPro" required/>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Flujo De Efectivo</label>
                                    <input type="number"  name="flujoPro" placeholder="Flujo De Efectivo" class="form-control" id="flujoEfectivoPro" required/>
                                </div>
                              
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Saldo Inicial No Recuperado</label>
                                    <input type="number" name="saldoPro" placeholder="Saldo Inicial No Recuperado" class="form-control" id="saldoInicialPro" required/>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="hidden" name="periodoPro" value="1" id="periodoPro"/>
                                </div>
                             
                                
                        

                        
                            <h4>Periodo 2:</h4>
                            
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesAlt" placeholder="Interés" class="form-control" id="interesAlt" required/>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Flujo De Efectivo</label>
                                    <input type="number"  name="flujoAlt" placeholder="Flujo De Efectivo" class="form-control" id="flujoAlt" required/>
                                </div>
                              
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Saldo Inicial No Recuperado</label>
                                    <input type="number" name="saldoAlt" placeholder="Saldo Inicial No Recuperado" class="form-control" id="saldoAlt" required/>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="hidden" name="periodoAlt" value="2" id="periodoAlt"/>
                                </div>
                                 
                        

                            
                            <h4>Periodo 3:</h4>
                            
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesAlt1" placeholder="Interés" class="form-control" id="interesAlt1" required/>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Flujo De Efectivo</label>
                                    <input type="number"  name="flujoAlt1" placeholder="Flujo De Efectivo" class="form-control" id="flujoAlt1" required/>
                                </div>
                              
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Saldo Inicial No Recuperado</label>
                                    <input type="number" name="saldoAlt1" placeholder="Saldo Inicial No Recuperado" class="form-control" id="saldoAlt1" required/>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="hidden" name="periodoAlt1" value="3" id="periodoAlt1">
                                    <input type="hidden" name="idProyectoTasaDeRetorno" value=<?php echo $idProyectoTasaDeRetorno;?> />
                                </div>
                                  <div class="f1-buttons">
                                   
                                     <button type="submit" class="btn btn-submit btn btn-primary">Enviar</button>
        
                                </div>
                        
                    </form>                        
                </div>
            </div>
        </div>
    </div>-->
<!--Aqui finaliza el tercer modal de interes generado--> 

</div>

