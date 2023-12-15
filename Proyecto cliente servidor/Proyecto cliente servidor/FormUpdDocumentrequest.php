<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["DocumentRequestID"];
 require ('cn.php');
$consulta = "SELECT DocumentRequestID, StudentID, DocumentTypeID, EmployeeID, RequestDate FROM DocumentRequest WHERE DocumentRequestID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo '<center>
    <form class="col-3" action="UpdDocumentrequest.php" method="post">
        <label class="form-label" for="StudentID"><h1>Student:</h1></label><br>
        <select class="form-control" id="StudentID" name="StudentID" required>';

    $consultaStudent = "SELECT StudentID, FirstName FROM Student";
    $resultadoStudent = $conn->query($consultaStudent);

    while ($rowStudent = $resultadoStudent->fetch_assoc()) {
        $selected = ($rowStudent['StudentID'] == $registro['StudentID']) ? 'selected' : '';
        echo '<option value="' . $rowStudent['StudentID'] . '" ' . $selected . '>' . $rowStudent['FirstName'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="DocumentTypeID"><h1>Document Type:</h1></label><br>';
    echo '<select class="form-control" id="DocumentTypeID" name="DocumentTypeID" required>';

    $consultaDocumentType = "SELECT DocumentTypeID, Name FROM DocumentType";
    $resultadoDocumentType = $conn->query($consultaDocumentType);

    while ($rowDocumentType = $resultadoDocumentType->fetch_assoc()) {
        $selected = ($rowDocumentType['DocumentTypeID'] == $registro['DocumentTypeID']) ? 'selected' : '';
        echo '<option value="' . $rowDocumentType['DocumentTypeID'] . '" ' . $selected . '>' . $rowDocumentType['Name'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>';
    echo '<select class="form-control" id="EmployeeID" name="EmployeeID" required>';

    $consultaEmployee = "SELECT EmployeeID, FirstName FROM Employee";
    $resultadoEmployee = $conn->query($consultaEmployee);

    while ($rowEmployee = $resultadoEmployee->fetch_assoc()) {
        $selected = ($rowEmployee['EmployeeID'] == $registro['EmployeeID']) ? 'selected' : '';
        echo '<option value="' . $rowEmployee['EmployeeID'] . '" ' . $selected . '>' . $rowEmployee['FirstName'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="RequestDate"><h1>Request Date:</h1></label><br>';
    echo '<input class="form-control" type="date" id="RequestDate" name="RequestDate" value="' . $registro["RequestDate"] . '" required><br>';

    echo '<input class="btn btn-primary" type="submit" value="Modificar">';
    echo '<input class="form-label" type="hidden" id="DocumentRequestID" name="DocumentRequestID" value="' . $id . '">';
    echo '</form>
    </center>';
}
?>
</body>
</html>
