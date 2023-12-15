<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_POST["EmployeeID"];
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

$sql = "UPDATE Employee SET FirstName='$FirstName', LastName='$LastName', MiddleName='$MiddleName', PhoneNumber='$PhoneNumber', 
        Email='$Email', Gender='$Gender', Position='$Position', Salary='$Salary', DateOfBirth='$DateOfBirth', 
        Address='$Address', ZipCode='$ZipCode', RFC='$RFC', SocialSecurity='$SocialSecurity', EmployeeTypeID='$EmployeeTypeID' 
        WHERE EmployeeID=$id";

    $resultado = mysqli_query($conn,$sql);

header("Location: Employee.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>