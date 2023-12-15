<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
    require_once('Config.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    $StudentID = $_POST["StudentID"];
    $DocumentTypeID = $_POST["DocumentTypeID"];
    $EmployeeID = $_POST["EmployeeID"];
    $RequestDate = $_POST["RequestDate"];

    $sql = "INSERT INTO Documentrequest (StudentID, DocumentTypeID, EmployeeID, RequestDate) VALUES ('$StudentID', '$DocumentTypeID', '$EmployeeID', '$RequestDate')";

    $resultado = mysqli_query($conn, $sql);
    header("Location: Documentrequest.php"); 
    mysqli_close($conn);
    ?>
</body>
</html>
