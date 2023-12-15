<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$UsserName=$_POST["UsserName"];
$Name=$_POST["namee"];
$Password=$_POST["passwordd"];
$Email=$_POST["email"];
      $id=$_POST["Usserrid"];
      
   $sql = "UPDATE usser SET UsserrName='$UsserName',namee='$Name',Passwordd='$Password',Email='$Email' WHERE idUsserr=". $id;
   

    $resultado = mysqli_query($conn,$sql);

header("Location: User.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>