
<div class="col-md-10 col-md-offset-1">
    <h1>Informacion Interes Compuesto</h1>  
</div>
<div class="col-md-10 col-md-offset-1">    
<table id="interesCompuesto" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>

<?php


$conexion2 = new Conexion();

$idProyecto2 = $_GET['id'];

$query_ic="SELECT * FROM tbl_interes_compuesto where id_proyecto=".$idProyecto2;


$results2= mysqli_query($conexion2->getConexion(), $query_ic);

echo '<tr>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Monto Pagado</th>
            <th>Pago a Capital</th> 
            <th>Saldo Actual</th>              
            <th>Cuota</th>
        </tr>';
foreach ($results2 as $result) {
    
    echo '<tr>
            <th>'.$result['periodo'].'</th>
            <th>'.$result['interes'].'</th>
            <th>'.$result['monto_pagado'].'</th>
            <th>'.$result['pago_capital'].'</th>  
            <th>'.$result['saldo_actual'].'</th>             
            <th>'.$result['cuota'].'</th>
            
            
        </tr>';
}

$conexion2->cerrarConexion();

            ?>

        
        </thead>
        <tbody>
        </tbody>
    </table>               
</div>
