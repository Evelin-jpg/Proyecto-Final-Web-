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
      $id=$_POST["CareerID"];
      
   $sql = "UPDATE career SET name='$Name',Description='$Description' WHERE CareerID=". $id;
   

    $resultado = mysqli_query($conn,$sql);

header("Location: Career.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>