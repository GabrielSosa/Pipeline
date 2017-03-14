<!--Aqui el primer modal de interes simple--> 

                                <div class="modal fade" id="interesSimple" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">INTERES SIMPLE</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Monto</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente2_cp1" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Periodo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="numero_de_periodos_cp1" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_de_interes_cp1" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="interessimple_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="InteresSimple_cp1(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el primer modal de interes simple--> 