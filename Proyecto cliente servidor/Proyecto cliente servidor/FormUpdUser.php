<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["idUsserr"];
 require ('cn.php');
$consulta = "SELECT * FROM Usser WHERE idUsserr = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo'<center>
    <form class= "col-3" action="UpdUser.php" method="post">
    <label class="form-label" for=UsserName"><h1>Username:</h1></label><br>
    <input class="form-control" type="text" id="UsserName" name="UsserName"value="'.$registro["UsserrName"].'"><br>
    <label class="form-label" for="namee"><h1>Name: </h1></label><br>
  <input class="form-control" type="text" id="namee" name="namee"value="'.$registro["namee"].'"><br>
  <label class="form-label" for="passwordd"><h1>Password:</h1></label><br>
        <input class="form-control" type="text" id="passwordd" name="passwordd"value="'.$registro["passwordd"].'"><br>
         <label class="form-label" for="email"><h1>email:</h1></label><br>
  <input class="form-control" type="text" id="email" name="email"value="'.$registro["email"].'"><br>
        <input class="btn btn-primary" type="submit" value="Modificar">
        <input class="form-label" type="hidden" id="idUsserr" name="idUsserr"
        value="'.$id.'">
        </form>
    </center>';
}
    ?>
</body>
</html>