<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["DocumentRequestID"];

$sql = "UPDATE documentrequest SET status=0 where DocumentRequestID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location:Documentrequest.php"); 
mysqli_close( $conn );


?>