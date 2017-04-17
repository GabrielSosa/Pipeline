<head>  
<title>Guardamos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

session_start();

$mysqli = new mysqli("localhost", "root", "", "db_sistem_negocio");
    
    if (!$mysqli) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }


$id = $_GET["id"];

// Abrimos la conexion a la base de datos  
include 'conexion.php';
  require_once( 'conexion.php');
  $conexion = new Conexion();
  $id = $_GET['id'];

  $usuario = $_SESSION['usuario'];

$query_usuario="SELECT * FROM tbl_usuarios WHERE usuario='".$usuario."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);
    //  obtenermos la cantidad de registros de la consulta
    $usuarioQ = mysqli_fetch_array($resultado, MYSQLI_NUM);
    $idUsuario = $usuarioQ[0];
    $array;
  if(isset($id)) {
  
    $sql= mysqli_query($conexion->getConexion(), "SELECT * FROM TBL_PROYECTOS WHERE ID_PROYECTO='$id' " );
    $array= mysqli_fetch_array( $sql);
    if($array['id_usuario']==$idUsuario){
    }else{  
      echo "<script>location.href=' index.php' </script>"; // redirigir al login si es incorrecto
      echo "<script>alert('Acceso invalido') </script>";
      
    }
      
  }else{
    header("location: index.php");
  }

$id = $_GET['id'];

$query_usuario="DELETE FROM tbl_proyectos WHERE id_proyecto='".$id."';";

$conn = $conexion->getConexion();

    // Ejecutamos la consulta
    $resultado = mysqli_query($conexion->getConexion(), $query_usuario);

header("location: ../index.php");
?>  
</body>  