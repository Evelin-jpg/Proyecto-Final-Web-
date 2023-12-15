<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <form class="col-6" action="InserDocumentrequest.php" method="post">
            <label class="form-label" for="StudentID"><h1>Student:</h1></label><br>
            <select class="form-control" id="StudentID" name="StudentID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaStudents = "SELECT StudentID, FirstName FROM Student WHERE Status = 1";
                    $resultadoStudents = $conn->query($consultaStudents);
    
                    while ($rowStudents = $resultadoStudents->fetch_assoc()) {
                        echo '<option value="' . $rowStudents['StudentID'] . '">' . $rowStudents['FirstName'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="DocumentTypeID"><h1>Document Type:</h1></label><br>
            <select class="form-control" id="DocumentTypeID" name="DocumentTypeID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaDocumentType = "SELECT DocumentTypeID, Name FROM documenttype WHERE Status = 1";
                    $resultadoDocumentType = $conn->query($consultaDocumentType);
    
                    while ($rowDocumentType = $resultadoDocumentType->fetch_assoc()) {
                        echo '<option value="' . $rowDocumentType['DocumentTypeID'] . '">' . $rowDocumentType['Name'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>
            <select class="form-control" id="EmployeeID" name="EmployeeID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaEmployees = "SELECT EmployeeID, FirstName FROM Employee WHERE Status = 1";
                    $resultadoEmployees = $conn->query($consultaEmployees);
    
                    while ($rowEmployees = $resultadoEmployees->fetch_assoc()) {
                        echo '<option value="' . $rowEmployees['EmployeeID'] . '">' . $rowEmployees['FirstName'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="RequestDate"><h1>Request Date:</h1></label><br>
            <input class="form-control" type="date" id="RequestDate" name="RequestDate" required><br>

            <input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </center>
</body>
</html>


