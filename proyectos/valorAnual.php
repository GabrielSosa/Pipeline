<?php 
// Abrimos la conexion a la base de datos  

$conexionCost = new Conexion();
$idProyectoCost = $_GET['id'];
$query_costo = "SELECT count(*) FROM tbl_comparacion_valor_anual WHERE id_proyecto =".$idProyectoCost.";";


$resultadoCost = mysqli_query($conexionCost->getConexion(), $query_costo);

//echo $resultadoCost;
 
$row= mysqli_fetch_array($resultadoCost, MYSQLI_NUM);

$CostoCapital = $row[0];

if($CostoCapital != 0)
{
	include('proyectos/valorAnualgraf.php');
   

}else{
	 echo '<br><p style="text-align:center;height: 80px;" >Comparar con propuesta II : <a href="#" data-id="1" data-toggle="modal" data-target="#myModalVa">Valor Anual</a>.</p>';
}


?>

<!--Aqui el tercer modal de interes generado--> 

<div id="centrado">
    <div class="modal fade" id="myModalVa" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">INGRESE PROPUESTA II</h5>
                    </div>

                <div class="modal-body">
                    <form role="form" action="proyectos/ejecutarValorAnual.php" method="post" class="f1">
                        <h3>Registro de Valor Anual</h3>
                        
                            <h4>Acerca del proyecto:</h4>
                                <div class="form-group">
                                    <label class="sr-only">Costo Inicial</label>
                                    <input type="number"  name="costoInicialPro" placeholder="costo Inicial del proyecto" class="form-control" id="costoInicialPro" data-toggle="tooltip" data-placement="right" title="Cantidad con la que se piensa iniciar"  required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesPro"  placeholder="Interés" class="form-control" id="interesPro" data-toggle="tooltip" data-placement="right" title="Cantidad de dinero generada a favor por concepto de intereses" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Valor Salvamento</label>
                                    <input type="number" name="valorSalvamentoPro" placeholder="Valor Salvamento" class="form-control" id="valorSalvamentoPro" data-toggle="tooltip" data-placement="right" title="El valor salvamento es esa cantidad de dinero que puede ayudar a la inversión inicial en caso que exista una emergencia"  required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Periodo</label>
                                    <input type="number" name="periodoPro" placeholder="Período" class="form-control" id="periodoPro" data-toggle="tooltip" data-placement="right" title="El periodo pueden ser los mismos años o puede variar según lo que establece el banco" required>
                                </div>
                                
                    
                            <h4>Acerca de la Propuesta:</h4>
                                <div class="form-group">
                                    <label class="sr-only">Costo Inicial</label>
                                    <input type="number"  name="costoInicialAlt" placeholder="costo Inicial del proyecto" class="form-control" id="costoInicialAlt" data-toggle="tooltip" data-placement="right" title="Cantidad con la que se piensa iniciar" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Interés</label>
                                    <input type="number" name="interesAlt" placeholder="Interés" class="form-control" id="interesAlt" data-toggle="tooltip" data-placement="right" title="Cantidad de dinero generada a favor por concepto de intereses" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Valor Salvamento</label>
                                    <input type="number" name="valorSalvamentoAlt" placeholder="Valor Salvamento" class="form-control" id="valorSalvamentoAlt" data-toggle="tooltip" data-placement="right" title="El valor salvamento es esa cantidad de dinero que puede ayudar a la inversión inicial en caso que exista una emergencia" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Periodo</label>
                                    <input type="number" name="periodoAlt" placeholder="Período" class="form-control" id="periodoAlt" data-toggle="tooltip" data-placement="right" title="El periodo pueden ser los mismos años o puede variar según lo que establece el banco" required>
                                    <input type="hidden" name="idProyectoCosto" value=<?php echo $idProyectoCost;?> />
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