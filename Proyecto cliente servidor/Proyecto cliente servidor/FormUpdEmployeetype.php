<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["EmployeeTypeID"];
 require ('cn.php');
$consulta = "SELECT * FROM employeetype WHERE EmployeeTypeID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo'<center>
    <form class= "col-3" action="UpdEmployeetype.php" method="post">
    <label class="form-label" for="Namee"><h1>Name: </h1></label><br>
  <input class="form-control" type="text" id="Namee" name="Namee"value="'.$registro["Namee"].'"><br>
  <label class="form-label" for="BaseSalary"><h1>Password:</h1></label><br>
        <input class="form-control" type="text" id="BaseSalary" name="BaseSalary"value="'.$registro["BaseSalary"].'"><br>
         <label class="form-label" for="Hourss"><h1>Hourss:</h1></label><br>
  <input class="form-control" type="text" id="Hourss" name="Hourss"value="'.$registro["Hourss"].'"><br>
        <input class="btn btn-primary" type="submit" value="Modificar">
        <input class="form-label" type="hidden" id="idUsserr" name="EmployeeTypeID"
        value="'.$id.'">
        </form>
    </center>';
}
    ?>
</body>
</html>