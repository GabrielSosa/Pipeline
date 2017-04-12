         
<div class="col-md-10 col-md-offset-1">
    <h1>Informacion Interes Simple</h1>  
</div>
<div class="col-md-10 col-md-offset-1">    
<table id="interesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>

        <?php


$conexion = new Conexion();

$usuario = $_SESSION['usuario'];

$idProyecto = $_GET['id'];

$query_is="SELECT * FROM tbl_interes_simple where id_proyecto=".$idProyecto;

$results= mysqli_query($conexion->getConexion(), $query_is);


echo '<tr>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Pago a Capital</th>               
            <th>Cuota</th>
            <th>Saldo Actual</th>
            <th>Monto Pagado</th>
        </tr>';
foreach ($results as $result) {
    
    echo '<tr>
            <th>'.$result['periodo'].'</th>
            <th>'.$result['interes'].'</th>
            <th>'.$result['pago_capital'].'</th>               
            <th>'.$result['cuota'].'</th>
            <th>'.$result['saldo_actual'].'</th>
            <th>'.$result['monto_pagado'].'</th>

        </tr>';
}

$conexion->cerrarConexion();
            
            ?>
        
        </thead>
        <tbody>
        </tbody>
    </table>               
</div>
