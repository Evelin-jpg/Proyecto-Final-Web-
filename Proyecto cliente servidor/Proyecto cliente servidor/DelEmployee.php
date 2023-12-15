<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["EmployeeID"];

$sql = "UPDATE Employee SET status=0 where EmployeeID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Employee.php"); 
mysqli_close( $conn );


?>