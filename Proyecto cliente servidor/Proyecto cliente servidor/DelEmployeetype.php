<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["EmployeeTypeID"];

$sql = "UPDATE employeetype SET status=0 where EmployeeTypeID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Employeetype.php"); 
mysqli_close( $conn );


?>