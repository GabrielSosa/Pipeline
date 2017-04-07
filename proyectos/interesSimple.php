         
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

$conn = $conexion->getConexion();

$results= mysqli_query($conexion->getConexion(), $query_is);


echo '<tr>
            <th>Monto Prestamo</th>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Monto A Pagar</th>               
            <th>Monto Pagado</th>
            <th>Interes Simple</th>
        </tr>';
foreach ($results as $result) {
    
    echo '<tr>
            <th>'.$result['monto_prestamo'].'</th>
            <th>'.$result['periodo'].'</th>
            <th>'.$result['interes'].'</th>
            <th>'.$result['monto_pagar'].'</th>               
            <th>'.$result['monto_pagado'].'</th>
            <th>'.$result['interes_simple'].'</th>


        </tr>';
}

            ?>
        
        </thead>
        <tbody>
        </tbody>
    </table>               
</div>
