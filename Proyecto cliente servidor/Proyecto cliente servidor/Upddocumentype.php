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
      $id=$_POST["DocumenTypeID"];
      
   $sql = "UPDATE documentype SET name='$Name',Description='$Description' WHERE DocumentTypeID=". $id;
   

    $resultado = mysqli_query($conn,$sql);

header("Location: Documentype.php"); 
mysqli_close( $conn );



   ?>
   </body>
   </html>
</body>
</html>