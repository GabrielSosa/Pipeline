<!--Aqui el tercer modal de interes generado--> 

                                <div class="modal fade" id="Efectivo" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">FLUJO EFECTIVO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="InteresForm9" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Entrada de Efectivo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="En_Efec_Ne_cp1" data-toggle="tooltip" data-placement="right" title="Cantidad total de efectivo que ingresó a las cuentas por concepto de ventas" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Salida de Efectivo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="Sa_Efec_Ne_cp1" data-toggle="tooltip" data-placement="right" title="Cantidad de dinero que salió por cuestion de gastos, pagos u otros motivos" />
                                                        </div>
                                                     </div> 

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="flujoefectivoneto_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="FlujoEfectivoNeto_cp1(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el tercer modal de interes generado--> 

<!--Aqui el tercer modal de interes generado--> 

                                <div class="modal fade" id="EfectivoAnio" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">FLUJO EFECTIVO EN EL AÑO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="InteresForm10" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Cantidad Base de Dinero</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="cantidad_base_cp2" data-toggle="tooltip" data-placement="right" title="Esta es la cantidad con la cual se comenzó el periodo en cuestión"/>
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Periodo de Tiempo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_7_cp2" data-toggle="tooltip" data-placement="right" title="El periodo pueden ser los mismos años o puede variar según lo que establece el banco"/>
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Gradiente</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="gradiante_cp2" data-toggle="tooltip" data-placement="right" title="es una serie de flujos de efectivo que aumenta o disminuye
                                                            en una cantidad constante. Es decir, el flujo de efectivo, ya sea ingreso o desembolso, cambia por la misma cantidad aritmética cada periodo."/>
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="flujo_efec_anio_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="flujo_efectivo_anio_cp2(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el tercer modal de interes generado--> 