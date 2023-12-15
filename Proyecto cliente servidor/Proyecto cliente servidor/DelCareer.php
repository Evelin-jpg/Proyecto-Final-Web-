<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["CareerID"];

$sql = "UPDATE career SET status=0 where CareerID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Career.php"); 
mysqli_close( $conn );


?>