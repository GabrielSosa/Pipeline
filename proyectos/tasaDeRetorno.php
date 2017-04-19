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
     echo '<br><p style="text-align:center;height: 80px;" >Comparar con propuesta II : <a href="#" data-id="1" data-toggle="modal" data-target="#myModalTa">Tasa de Retorno</a>.</p>';
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
                        <h5 class="modal-title">INGRESE PROPUESTA II</h5>
                    </div>

                <div class="modal-body">
                    <form role="form" action="proyectos/ejecutarTasaDeRetorno.php" method="post" class="f1">
                        <h3>Registro de Tasa De Retorno</h3>
                        
                            <h4>Acerca del proyecto:</h4>
                              <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesPro" placeholder="Interés" class="form-control" id="interesPro" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Flujo De Efectivo</label>
                                    <input type="number"  name="flujoPro" placeholder="Flujo De Efectivo" class="form-control" id="flujoEfectivoPro" required>
                                </div>
                              
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Saldo Inicial</label>
                                    <input type="number" name="saldoPro" placeholder="Saldo Inicial" class="form-control" id="saldoInicialPro" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Periodo</label>
                                    <input type="number" name="periodoPro" placeholder="Período" class="form-control" id="periodoPro" required>
                                </div>
                                
                    
                            <h4>Acerca de la Propuesta:</h4>
                             <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesAlt" placeholder="Interés" class="form-control" id="interesAlt" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Flujo De Efectivo</label>
                                    <input type="number"  name="flujoAlt" placeholder="Flujo De Efectivo" class="form-control" id="flujoEfectivoAlt" required>
                                </div>
                               
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Saldo Inicial</label>
                                    <input type="number" name="saldoAlt" placeholder="Saldo Inicial" class="form-control" id="saldoInicialAlt" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Periodo</label>
                                    <input type="number" name="periodoAlt" placeholder="Período" class="form-control" id="periodoAlt" required>
                                    <input type="hidden" name="idProyectoTasaDeRetorno" value=<?php echo $idProyectoTasaDeRetorno;?> />
                                </div>
                                <div class="f1-buttons">
                                    
                                    <button type="submit" class="btn btn-submit btn btn-primary">Enviar</button>
                                </div>
                     
                        </form>                        
                </div>
            </div>
        </div>
    </div>
<!--Aqui finaliza el tercer modal de interes generado--> 
</div>