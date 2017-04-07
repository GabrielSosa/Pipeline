
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
            <th>Monto Prestamo</th>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Monto A Pagar</th>               
            <th>Monto Pagado</th>
            <th>Interes Compuesto</th>
        </tr>';
foreach ($results2 as $result2) {

    echo '<tr>
            <th>'.$result2['monto_prestamo'].'</th>
            <th>'.$result2['periodo'].'</th>
            <th>'.$result2['interes'].'</th>
            <th>'.$result2['monto_pagar'].'</th>               
            <th>'.$result2['monto_pagado'].'</th>
            <th>'.$result2['interes_compuesto'].'</th>


        </tr>';
}

            ?>

        
        </thead>
        <tbody>
        </tbody>
    </table>               
</div>
