<?php 
// Abrimos la conexion a la base de datos  
$conexionInversionP = new Conexion();
$idProyecto = $_GET['id'];
$query_IP = "SELECT  `cantidad_depositada_hoy`, `cantidad_retirar_indefinida`, `cantidad_acumular`, `tiempo_requerido` FROM `tbl_resultados` WHERE id_proyecto=".$idProyectoCost.";";
$resultadoIP = mysqli_query($conexionInversionP->getConexion(), $query_IP);

 
$row= mysqli_fetch_array($resultadoIP, MYSQLI_NUM);
$IP = $row[0];
if($IP != 0)
{
	include('proyectos/inversionPermanentegraf.php');
   
}else{
	 echo '<br><p style="text-align:center;height: 80px;" >Agregar Propuesta: <a href="#" data-id="1" data-toggle="modal" data-target="#myModalIP">Inversion Permanente</a>.</p>';
}
?>

<!--Aqui el tercer modal de interes generado--> 

<div id="centrado">
    <div class="modal fade" id="myModalIP" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title">INGRESE PROPUESTA </h5>
                    </div>

                <div class="modal-body">
                    <form role="form" action="proyectos/ejecutarInversionP.php" method="post" class="f1">
                        <h3>Registro de Inversión Permanente</h3>
						
						
                        
							
                                <div class="form-group">
                                    <label class="sr-only">cantidad depositada hoy</label>
                                    <input type="number"  name="cantidad_depositadapro" placeholder="cantidad depositada" class="form-control" id="cantidad_depositadapro" data-toggle="tooltip" data-placement="right" title="Aveces se desea invertir en ahorros, esta cantidad representa la cantidad de dinero depositada para generar intereses a favor" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">cantidad a retirar indefinidamente</label>
                                    <input type="number" name="cantidad_retirarpro" placeholder="cantidad a retirar" class="form-control" id="cantidad_retirarpro" data-toggle="tooltip" data-placement="right" title="Cantidad que se desea retirar por concepto de intereses generados a favor" required>
									<input type="hidden" name="idProyecto" value=<?php echo $idProyecto;?> />
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