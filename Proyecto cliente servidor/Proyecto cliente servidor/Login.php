<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<?php
session_start();
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

echo '<form class= "col-3" action="inicio.php" method="post">
<input class="form-label" type="hidden" id="nombre" name="nombre"
value="'.$nombre.'">
</form>';


// Consulta SQL para buscar el usuario en la base de datos
$sql = "SELECT * FROM usser WHERE usserrname='$nombre' AND passwordd='$clave' AND status =1";

// Ejecución de la consulta
$resultado = mysqli_query($conn, $sql);

// Verificación del resultado de la consulta
if (mysqli_num_rows($resultado) == 1) {
    $_SESSION['nombre'] = $nombre;
    header("Location: inicio.php");
} else {
    $_SESSION['error'] = true;
    header("Location: formulariologin.php");

}

// Cierre de la conexión a la base de datos
mysqli_close($conn);

?>
</body>
</html>