<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$MiddleName = $_POST["MiddleName"];
$PhoneNumber = $_POST["PhoneNumber"];
$Email = $_POST["Email"];
$Gender = $_POST["Gender"];
$Position = $_POST["Position"];
$Salary = $_POST["Salary"];
$DateOfBirth = $_POST["DateOfBirth"];
$Address = $_POST["Address"];
$ZipCode = $_POST["ZipCode"];
$RFC = $_POST["RFC"];
$SocialSecurity = $_POST["SocialSecurity"];
$EmployeeTypeID = $_POST["EmployeeTypeID"];
      
$sql = "INSERT INTO Employee (FirstName, LastName, MiddleName, PhoneNumber, Email, Gender, Position, Salary, DateOfBirth, Address, ZipCode, RFC, SocialSecurity, EmployeeTypeID)
VALUES ('$FirstName', '$LastName', '$MiddleName', '$PhoneNumber', '$Email', '$Gender', '$Position', '$Salary', '$DateOfBirth', '$Address', '$ZipCode', '$RFC', '$SocialSecurity', '$EmployeeTypeID')";
$resultado = $conn->query($sql);

header("Location: Employee.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>