<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["DocumentTypeID"];

$sql = "UPDATE documenttype SET status=0 where DocumentTypeID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Documenttype.php"); 
mysqli_close( $conn );


?>