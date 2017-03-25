
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Informacion Interes Simple</title>
    <!--CSS-->    
    <link rel="stylesheet" href="../media/css/bootstrap.css">
    <link rel="stylesheet" href="../media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../media/font-awesome/css/font-awesome.css">
    <!--Javascript-->    
    <script src="../media/js/jquery-1.10.2.js"></script>
    <script src="../media/js/jquery.dataTables.min.js"></script>
    <script src="../media/js/dataTables.bootstrap.min.js"></script>          
    <script src="../media/js/bootstrap.js"></script>
    <script src="readyFunctionInteresSimple.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
</head>

<body>
<div class="col-md-8 col-md-offset-2">
    <h1>Informacion Interes Simple</h1>  
</div>
<div class="col-md-8 col-md-offset-2">    
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Monto Prestamo</th>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Monto A Pagar</th>               
            <th>Monto Pagado</th>
            <th>Interes Simple</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th>Monto Prestamo</th>
            <th>Periodo</th>
            <th>Interes</th>
            <th>Monto A Pagar</th>               
            <th>Monto Pagado</th>
            <th>Interes Simple</th>
        </tr>
        </tfoot>
    </table>               
</div>
</body>
</html>
