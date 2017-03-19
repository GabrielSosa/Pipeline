<!--Aqui el tercer modal de interes generado--> 

                                <div class="modal fade" id="valorPresente" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR PRESENTE</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">valor Futuro</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_futuro_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_2_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_2_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_presente_inicial_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_presente_inversion_inicial_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="valorFuturo" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR FUTURO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Presente</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_futuro_compuesta_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_futuro_cantidad_compuesta_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="VP_Serie" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR PRESENTE DE SERIE UNIFORME</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Anual Uniforme</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente2_cp1" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_anual_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_3_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_serie_uniforme_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_presente_serie_uniforme_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="anual_Uniforme" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR ANUAL UNIFORME</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Presente Uniforme</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_presente_2_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_4_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_4_cp2" />
                                                        </div>
                                                     </div>  
 

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_anu_uniforme_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_anual_uniforme_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="Serie_Anual_Uniforme" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">SERIE DE VALOR ANUAL UNIFORME</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Futuro</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_futuro_2_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_5_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_5_cp2" />
                                                        </div>
                                                     </div>   

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_anu_serie_uniforme_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_anual_serie_uniforme_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="futuroUniforme" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR FUTURO DE SERIE UNIFORME</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Anual</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="valor_anual_2_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_6_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Interes</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_6_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="valor_futu_serie_uniforme_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="valor_futuro_serie_uniforme_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="gradiente" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">GRADIENTE ARITMÉTICO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Gradiente</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="gradiante_2_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años </label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_8_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interes (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_7_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="gradiente_arit_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="gradiente_aritmetico_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="factorGradiente" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">FACTOR GRADIENTE ARITMÉTICO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Gradiente</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="gradiante_4_cp2" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Años</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="periodo_tiempo_10_cp2" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interes (%)</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="tasa_interes_9_cp2" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="factor_gra_uniforme_cp2" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="factor_gradiente_aritmetico_cp2(); return false;">Calcular</button>
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

                                <div class="modal fade" id="futuroUnAnio" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h5 class="modal-title">VALOR FUTURO DURANTE UN AÑO</h5>
                                            </div>

                                            <div class="modal-body">
                                                <!-- The form is placed inside the body of modal -->
                                                <form id="loginForm" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-xs-3 control-label">Valor Presente</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="vf_p_cp4" />
                                                        </div>
                                                     </div> 
                                                     
                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Número de Capitalización</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="vf_m_cp4" />
                                                        </div>
                                                     </div>

                                                     <div class="form-group">
                                                        <label class="col-xs-3 control-label">Tasa de Interés</label>
                                                        <div class="col-xs-5">
                                                            <input type="text" class="form-control" id="vf_i_cp4" />
                                                        </div>
                                                     </div>  

                                                        <div class="form-group">
                                                            <label class="col-xs-3 control-label">Resultado</label>
                                                            <div class="col-xs-5">
                                                                <input type="text" class="form-control" id="vf_calc_cp4" disabled="true">
                                                            </div>
                                                                
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-xs-5 col-xs-offset-3">
                                                                <button type="submit" class="btn btn-primary" onclick="Valor_Futuro_cp4(); return false;">Calcular</button>
                                                                <button type="button" class="btn btn-primary" onclick="Limpiar();" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

<!--Aqui finaliza el tercer modal de interes generado--> 
