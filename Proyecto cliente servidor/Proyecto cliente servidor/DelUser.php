<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["idUsserr"];

$sql = "UPDATE Usser SET status=0 where idUsserr=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: User.php"); 
mysqli_close( $conn );


?>