<!--Aqui el tercer modal de interes generado--> 

                                <div class="modal fade" id="TasaInteres" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA DE INTERES</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                                                                   
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Monto del Préstamo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="ts_monto_cp1" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interés Acumulado</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="interes_acumulado_cp1" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado (%)</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="ts_resultado_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="TasaInteres_cp1(); return false;">Calcular</button>
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

                                <div class="modal fade" id="TasaRendimiento" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA DE RENDIMIENTO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Monto Prestado</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente_rendimiento_cp1" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes ya Pagado</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="interes_acumulado_rendimiento_cp1" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado (%)</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="resultadorendimiento_cp1" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="TasaDeRendimiento_cp1(); return false;">Calcular</button>
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

                                <div class="modal fade" id="TasaNominal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA DE INTERÉS NOMINAL</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interés por Periodo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="interes_periodos3_cp4" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Periodos</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="num_periodos_cp4" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="ti_cal_cp4" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="Tasa_Nominal_cp4(); return false;">Calcular</button>
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

                                <div class="modal fade" id="AnualEfectiva" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA DE INTERÉS EFECTIVA POR PERIODO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Periodo de Tiempo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="te_t_cp4" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Fecuencia de Composición</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="te_m_cp4" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés Nominal Anual</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="te_r_cp4" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="te_calc_cp4" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="Tasa_Efectiva_PC_cp4(); return false;">Calcular</button>
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

                                <div class="modal fade" id="EfectivaPorPeriodo" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA DE INTERÉS ANUAL EFECTIVA</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                                                                        
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Periodos</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="t_pc_m_cp4" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés Efectiva por Periodo</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="t_pc_cp4" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="t_pc_calc_cp4" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="Tasa_Interes_anual_Efectiva_cp4(); return false;">Calcular</button>
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

                                <div class="modal fade" id="AE_TasaNominal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">TASA ANUAL EFECTIVA POR PERIODO DE COMPOSICIÓN</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Periodos de Composición por Año</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tie_pc_m_cp4" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interes Efectiva Anual</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tie_pc_i_cp4" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="tie_pc_calc_cp4" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="TI_Efectiva_Por_Pc_cp4(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el tercer modal de interes generado--> 

