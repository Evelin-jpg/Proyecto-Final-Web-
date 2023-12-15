<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

     $Name=$_POST["Namee"];
     $BaseSalary=$_POST["BaseSalary"];
     $Hours=$_POST["Hourss"];

      
     $sql = "INSERT INTO EmployeeType (Namee, BaseSalary, Hourss) VALUES ('".$Name."','".$BaseSalary."','".$Hours."')";


    $resultado = mysqli_query($conn,$sql);
header("Location: Employeetype.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>