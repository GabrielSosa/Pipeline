
/** inicio cap 1 */

function Interes_cp1() {
    var valor_presente = document.getElementById("valor_presente4_cp1").value;
    var valor_futuro = document.getElementById("valor_futuro4_cp1").value;
                        

    document.getElementById("interesgenerado_cp1").value = valor_futuro - valor_presente;       

}



  function TasaInteres_cp1(){
    var interes_acumulado = document.getElementById("interes_acumulado_cp1").value;
    var valor_presente1 = document.getElementById("ts_monto_cp1").value;
                        

    document.getElementById("ts_resultado_cp1").value = (interes_acumulado / valor_presente1)*100;

  }


  function TasaDeRendimiento_cp1(){
    var interes_acumulado = document.getElementById("interes_acumulado_rendimiento_cp1").value;
    var valor_presente1 = document.getElementById("valor_presente_rendimiento_cp1").value;
                        

    document.getElementById("resultadorendimiento_cp1").value = (interes_acumulado / valor_presente1)*100;

  }

function InteresSimple_cp1(){
    var valor_presente2 = document.getElementById("valor_presente2_cp1").value;
    var numero_de_periodos = document.getElementById("numero_de_periodos_cp1").value;
    var tasa_de_interes = document.getElementById("tasa_de_interes_cp1").value;
                        

    document.getElementById("interessimple_cp1").value = valor_presente2*numero_de_periodos*tasa_de_interes;

}


function InteresCompuesto_cp1(){
    var valor_presente3 = document.getElementById("valor_presente3_cp1").value;
    var numero_de_periodos1 = document.getElementById("numero_de_periodos1_cp1").value;
    var tasa_de_interes1 = document.getElementById("tasa_de_interes1_cp1").value;
                                        

    document.getElementById("interescompuesto_cp1").value =valor_presente3*Math.pow((parseFloat(tasa_de_interes1) + 1),numero_de_periodos1);
}


function FlujoEfectivoNeto_cp1(){
    var En_Efec_Ne = document.getElementById("En_Efec_Ne_cp1").value;
    var Sa_Efec_Ne = document.getElementById("Sa_Efec_Ne_cp1").value;
                        

    document.getElementById("flujoefectivoneto_cp1").value = En_Efec_Ne - Sa_Efec_Ne;

}
  

/**fin cap1  */
/** inicio cap 2*/

  function valor_futuro_cantidad_compuesta_cp2(){
            var valor_presente=parseFloat(document.getElementById("valor_presente_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_cp2").value);

            document.getElementById("valor_futuro_compuesta_cp2").value = Math.round(valor_presente*Math.pow(tasa_interes+1,periodo_tiempo));

        }
        function valor_presente_inversion_inicial_cp2(){
            var valor_futuro=parseFloat(document.getElementById("valor_futuro_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_2_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_2_cp2").value);

            document.getElementById("valor_presente_inicial_cp2").value=Math.round((valor_futuro/Math.pow(tasa_interes+1,periodo_tiempo)));
        }
        function valor_presente_serie_uniforme_cp2(){
            var valor_anual=parseFloat(document.getElementById("valor_anual_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_3_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_3_cp2").value);
            if (tasa_interes!=0){
                document.getElementById("valor_serie_uniforme_cp2").value= Math.round((valor_anual*(Math.pow((1 + tasa_interes), periodo_tiempo) - 1)/(Math.pow((1 + tasa_interes),periodo_tiempo)*periodo_tiempo)));
            }else{
                document.getElementById("valor_serie_uniforme_cp2").value="La tasa de interés debe ser diferente a cero.";
            }
        }

        function valor_anual_uniforme_cp2(){
            var valor_presente=parseFloat(document.getElementById("valor_presente_2_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_4_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_4_cp2").value);
            document.getElementById("valor_anu_uniforme_cp2").value= Math.round((valor_presente*((tasa_interes * Math.pow((tasa_interes + 1), periodo_tiempo))/(Math.pow((1 + tasa_interes),periodo_tiempo) - 1))));

        }   

        function valor_anual_serie_uniforme_cp2(){
            var valor_futuro= parseFloat(document.getElementById("valor_futuro_2_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_5_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_5_cp2").value);
            document.getElementById("valor_anu_serie_uniforme_cp2").value= Math.round((valor_futuro*(tasa_interes/(Math.pow((1 + tasa_interes),periodo_tiempo) - 1))));

        }

        function valor_futuro_serie_uniforme_cp2(){
            var valor_anual= parseFloat(document.getElementById("valor_anual_2_cp2").value);
            var tasa_interes=parseFloat(document.getElementById("tasa_interes_6_cp2").value)/100;
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_6_cp2").value);
            document.getElementById("valor_futu_serie_uniforme_cp2").value= Math.round((valor_anual*((Math.pow((1 + tasa_interes),periodo_tiempo) - 1)/tasa_interes)));

        }

    
        function flujo_efectivo_anio_cp2(){
            var cantidad_base= parseFloat(document.getElementById("cantidad_base_cp2").value);
            var gradiante=parseFloat(document.getElementById("gradiante_cp2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_7_cp2").value);
            document.getElementById("flujo_efec_anio_cp2").value= Math.round((cantidad_base + (periodo_tiempo - 1) * gradiante));

    }

    

        function gradiente_aritmetico_cp2(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_7_cp2").value)/100;
            var gradiante=parseFloat(document.getElementById("gradiante_2_cp2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_8_cp2").value);
            document.getElementById("gradiente_arit_cp2").value= Math.round((gradiante / tasa_interes * (((Math.pow((tasa_interes + tasa_interes),periodo_tiempo) - 1)/ tasa_interes * Math.pow((1 + tasa_interes),periodo_tiempo))-(periodo_tiempo/Math.pow((1 + tasa_interes),periodo_tiempo)))));

        }

        function serie_anual_uniforme_cp2(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_8_cp2").value)/100;
            var gradiante=parseFloat(document.getElementById("gradiante_3_cp2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_9_cp2").value);
            document.getElementById("serie_anu_uniforme_cp2").value = Math.round((gradiante * ((1/tasa_interes)-(periodo_tiempo/Math.pow((1 + tasa_interes),periodo_tiempo) - 1))));

        }

        function factor_gradiente_aritmetico_cp2(){
            var tasa_interes= parseFloat(document.getElementById("tasa_interes_9_cp2").value)/100;
            var gradiante=parseFloat(document.getElementById("gradiante_4_cp2").value);
            var periodo_tiempo=parseFloat(document.getElementById("periodo_tiempo_10_cp2").value);
            document.getElementById("factor_gra_uniforme_cp2").value= Math.round((gradiante * ((1/tasa_interes)*(((Math.pow((1 + tasa_interes),periodo_tiempo) - 1) / tasa_interes) - periodo_tiempo))));

        }
/** fin cap 2 */


/** inicio cap 4 */

function Tasa_Nominal_cp4(){
// donde: r =tasa de interes 
//        n= numero de periodos
        var t=document.getElementById("interes_periodos3_cp4").value/100;
        var n=document.getElementById("num_periodos_cp4").value;
        document.getElementById("ti_cal_cp4").value= t*n;

    }

    // Tasa de interes efectiva
    function Tasa_Efectiva_PC_cp4(){
// t es periodo de tiempo (solicitar al usuario) t se cancela de la formula segun el libro
//m es frecuencia de composición (solicitar al usuario)
//r es tasa interés nominal anual (Solicitar al usuario)
        var t=document.getElementById("te_t_cp4").value;
        var m=document.getElementById("te_m_cp4").value;
        var r=document.getElementById("te_r_cp4").value/100;
        document.getElementById("te_calc_cp4").value= r/m;

    }


    //valor futuro con una tasa efectiva
    function Valor_Futuro_cp4(){
/*
M es numero de periodos de capitalización por año (Solicitar al usuario)
i = tasa de interés efectiva por periodo de composición (Solicitar al usuario)
P es el monto principal
 */
     var p=document.getElementById("vf_p_cp4").value;

     var m=document.getElementById("vf_m_cp4").value;
     var i=document.getElementById("vf_i_cp4").value/100;
     var r=Math.pow(1+i,m);
    document.getElementById("vf_calc_cp4").value= parseFloat(p)*r;

    }

    function Tasa_Interes_anual_Efectiva_cp4(){
        /*
i es la tasa para un periodo de
composición.

 */
         var i=document.getElementById("t_pc_cp4").value/100;
          var m=document.getElementById("t_pc_m_cp4").value;
        var ia=Math.pow(1+parseFloat(i),parseInt(m) )-1;
        document.getElementById("t_pc_calc_cp4").value= ia;
    }
//tasa de interés fectiva por periodo de composición
    // esta formula es para cuando se conoce el valor de ia(tasa de interes anual efectiva)
   
    function TI_Efectiva_Por_Pc_cp4(){
        var ia=document.getElementById("tie_pc_i_cp4").value/100;
        var m=document.getElementById("tie_pc_m_cp4").value;
        
        var i=Math.pow(1+parseFloat(ia), 1/parseInt(m)) -1;
        document.getElementById("tie_pc_calc_cp4").value= i;
    

    }
/*
pc=periodo de composicion
i es la tasa para un periodo de
composición.


 */     
       
    

    //tasa de interes efectiva para capitalizacion continua anual
    function TIE_Para_Capitalizacion_Continua_cp4(){
        // r = tasa anual nominal
        var ia=document.getElementById("ta_nom_cp4").value/100;
         var i=Math.pow(Math.E,ia)-1;
         document.getElementById("ta_nom_calc_cp4").value= i;
    }


/** fin cap 4 */



function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        if (charCode != 46)
        return false;
    return true;
}
