<?php 
// Abrimos la conexion a la base de datos  

$conexionCost = new Conexion();
$idProyectoCost = $_GET['id'];
$query_costo = "SELECT * FROM tbl_resultados WHERE id_proyecto =".$idProyectoCost." and costo_capitalizado_1 != 0";

$resultadoCost = mysqli_query($conexionCost->getConexion(), $query_costo);

//echo $resultadoCost;
$CostoCapital = 0;
foreach ($resultadoCost as $result) {
    $CostoCapital = $result['valor_anual_1'];
}

if($CostoCapital != 0)
{
	include('proyectos/costoCapitalizadograf.php');

}else{
	 echo '<br><p style="text-align:center;height: 80px;" >Comparar con alternativa II : <a href="#" data-id="1" data-toggle="modal" data-target="#myModal">Costo Capitalizado</a>.</p>';
}


?>

<!--Aqui el tercer modal de interes generado--> 

<div id="centrado">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">INGRESE ALTERNATIVA II</h5>
                    </div>

                <div class="modal-body">
                    <form role="form" action="proyectos/ejecutarCosto.php" method="post" class="f1">
                        <h3>Registro de Costo Capitalizado</h3>
                        <p>Ingresa el costo capitalizado y la alternativa II</p>
                        <div class="f1-steps">
                            <div class="f1-progress">
                                <div class="f1-progress-line" data-now-value="10.66" data-number-of-steps="2" style="width: 10.66%;"></div>
                            </div>
                            <div class="f1-step active">
                                <div class="f1-step-icon"><i class="fa fa-sticky-note-o"></i></div>
                                    <p>Proyecto</p>
                            </div>
                            <div class="f1-step">
                                <div class="f1-step-icon"><i class="fa fa-money"></i></div>
                                    <p>Alternativa II</p>
                            </div>
                        </div>
                            
                        <fieldset>
                            <h4>Acerca del proyecto:</h4>
                                <div class="form-group">
                                    <label class="sr-only">Costo Inicial</label>
                                    <input type="number"  name="costoInicialPro" placeholder="costo Inicial del proyecto" class="form-control" id="costoInicialPro" data-toggle="tooltip" data-placement="right" title="Cantidad con la que se piensa iniciar" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Inversion Global</label>
                                    <input type="number" name="inversionGlobalPro" placeholder="Inversion global del proyecto" class="form-control" id="inversionGlobalPro" data-toggle="tooltip" data-placement="right" title="Cantidad total de efectivo que se invierte de inicio a fin en el proyecto" required>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next btn btn-primary">Siguiente</button>
        
                                </div>
                                
                        </fieldset>

                        <fieldset>
                            <h4>Acerca de la Alternativa:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Costo Inicial</label>
                                    <input type="number" name="costoInicialAlt" placeholder="costo Inicial de la Alternativa" class="form-control" id="costoInicialAlt" data-toggle="tooltip" data-placement="right" title="Cantidad con la que se piensa iniciar la opción alternativa" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Inversion Global</label>
                                    <input type="number"  name="inversionGlobalAlt" placeholder="Ingresa la inversion de la Alternativa" class="form-control" id="inversionGlobalPro" data-toggle="tooltip" data-placement="right" title="Cantidad total de efectivo que se invierte de inicio a fin en el proyecto" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Interés</label>
                                    <input type="number"  name="interesAlt" placeholder="Interés de la Alternativa" class="form-control" id="interesAlt" data-toggle="tooltip" data-placement="right" title="Cantidad total de efectivo que se se pagará por concepto de intereses, esto puede ser cero si se utilizan fondos propios" required>
                                    <input type="hidden" name="idProyectoCosto" value=<?php echo $idProyectoCost;?> />
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous btn btn-primary">Anterior</button>
                                    <button type="submit" class="btn btn-submit btn btn-primary">Enviar</button>
                                </div>
                        </fieldset>
                        </form>                        
                </div>
            </div>
        </div>
    </div>
<!--Aqui finaliza el tercer modal de interes generado--> 
</div>