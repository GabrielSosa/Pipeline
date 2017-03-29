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
                                                <form id="InteresForm" class="form-horizontal">
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
                                                        <label class="col-xs-3 control-label">Interes (%)</label>
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
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar()" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el primer modal de interes simple--> 

<!--Aqui el segundo modal de interes compuesto--> 

                                <div class="modal fade" id="interesCompuesto" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">INTERES COMPUESTO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="InteresForm1" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Monto</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente3_cp1" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Periodo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="numero_de_periodos1_cp1" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes(%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_de_interes1_cp1" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="interescompuesto_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="InteresCompuesto_cp1(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el segundo modal de interes compuesto--> 

<!--Aqui el tercer modal de interes generado--> 

                                <div class="modal fade" id="interesGenerado" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">INTERES GENERADO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="InteresForm2" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Saldo Pagado</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente4_cp1" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Monto del Préstamo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_futuro4_cp1" />
                                                        </div>
                                                     </div>

                                                      

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="interesgenerado_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="Interes_cp1(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el tercer modal de interes generado--> 
