<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

       require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

    
     $Name=$_POST["name"];
     $Description=$_POST["Description"];
      
     $sql = "INSERT INTO career (name, Description) VALUES ('".$Name."','".$Description."')";

    $resultado = mysqli_query($conn,$sql);
header("Location: Career.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>