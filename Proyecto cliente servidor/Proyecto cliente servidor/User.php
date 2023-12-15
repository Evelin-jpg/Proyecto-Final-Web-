<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style>
        .export-button {
            display: inline-block;
            padding: 8px 16px;
            margin-right: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            color: #fff;
            background-color: #28a745;
            border: none;
            transition: background-color 0.3s ease;
        }

        .export-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<?php
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
//---------------------------------------------------------------------------------------
session_start();

echo '<nav class="navbar navbar-dark bg-dark" "navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="#">
Inicio</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="inicio.php">
        Inicio
        </a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="User.php">
       User
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="Employeetype.php"> Employeetype
    </a>
  </li>
  <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Employee.php"> Employee
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Career.php"> Career
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="Documenttype.php">  DocumentType
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="DocumentRequest.php"> DocumentRequest
      </a>
    </li>
  
    <div class="dropdown"> <!-- Agrega el código del dropdown aquí -->
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person-fill"></i>
    </a>

    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="FormularioLogin.php">Cerrar sesión</a></li>
</div>

    </ul>
  </div>
</div>
</nav>';
//------------------------------------------------------------------------------------------------------
$consulta="select * from usser where status = 1";
$datos = $conn->query($consulta);
echo '<table class="table">';
echo "<tr>";
echo "<th><p>UsserName</th></p>";
echo "<th><p>namee</th></p>";
echo "<th><p>passwordd</th></p>";
echo "<th><p>email</th></p>";
while ($registro = $datos->fetch_assoc()){
//$registro = $datos->fetch_array(MYSQLI_ASSOC);
echo '
            <tr>           
                <td>'.$registro["UsserrName"].'</td>
                <td>'.$registro["namee"].'</td>
                <td>'.$registro["passwordd"].'</td>
                <td>'.$registro["email"].'</td>
                <td><a href="FormUpdUser.php?idUsserr='.$registro["idUsserr"].'"><i class="bi bi-pencil-square"></i>
                <td><a href="DelUser.php?idUsserr='.$registro["idUsserr"].'" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este registro?\')">
                <i class="bi bi-trash-fill"></i>';
 echo "</tr>";
}
echo"</table>";

echo'<td><a href="ForminserUser.html"><i class="bi bi-plus-square"></i>';


$conn->close();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>