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
    $id = $_POST["DocumentRequestID"];

    $sql = "UPDATE DocumentRequest SET StudentID='$StudentID', DocumentTypeID='$DocumentTypeID', EmployeeID='$EmployeeID', RequestDate='$RequestDate' WHERE DocumentRequestID=" . $id;

    $resultado = mysqli_query($conn, $sql);

    header("Location: DocumentRequest.php");
    mysqli_close($conn);
    ?>
</body>
</html>
