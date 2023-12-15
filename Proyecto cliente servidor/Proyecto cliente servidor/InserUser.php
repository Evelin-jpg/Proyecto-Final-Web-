<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

    $UsserName=$_POST["UsserName"];
     $Name=$_POST["name"];
     $password=$_POST["Password"];
     $Email=$_POST["Email"];

      
     $sql = "INSERT INTO Usser (Usserrname, namee, Passwordd, Email) VALUES ('".$UsserName."','".$Name."','".$password."','".$Email."')";

    $resultado = mysqli_query($conn,$sql);
header("Location: User.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>