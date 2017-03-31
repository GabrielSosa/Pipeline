<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="Backend/ejecutarRegistro.php" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Registrarse</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>


        <div class="login-wrap">
            <p>Ingrese sus datos principales</p>
            <input type="text" pattern="[(a-z)|(A-Z)|(\s)|(á)|(é)|(i)|(ó)|(ú)]*" autofocus="" placeholder="Nombre Completo" class="form-control" name="nombrePersona" required>
            <input type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="DIRECCION DE CORREO NO VALIDA" autofocus="" placeholder="Correo Electronico" class="form-control" name="correo" required>
            <input type="text" autofocus="" placeholder="Pais" class="form-control" name="pais" required>

            <p> Entre datos de la cuenta</p>
            <input type="text" autofocus="" placeholder="Nombre usuario" class="form-control" name="nombreUsuario" required>
            <input type="password" pattern=".{6,}" title="SEIS O MÁS CARACTERES" placeholder="Password" class="form-control" name="password" required>
            <input type="password" pattern=".{6,}" title="SEIS O MÁS CARACTERES" placeholder="Repite Password" class="form-control" required>
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> Acepto los terminos y politicas de condiciones
            </label>
            <button type="submit" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Listo para registrarse
                <a href="login.php" class="">
                    Login
                </a>
            </div>

        </div>

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>
</html>
