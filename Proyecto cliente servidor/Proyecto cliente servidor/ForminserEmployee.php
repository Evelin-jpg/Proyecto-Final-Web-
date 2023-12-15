<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <form class="col-6" action="InserEmployee.php" method="post">
            <label class="form-label" for="FirstName"><h1>First Name:</h1></label><br>
            <input class="form-control" type="text" id="FirstName" name="FirstName" required> <br>

            <label class="form-label" for="LastName"><h1>Last Name:</h1></label><br>
            <input class="form-control" type="text" id="LastName" name="LastName" required> <br>

            <label class="form-label" for="MiddleName"><h1>Middle Name:</h1></label><br>
            <input class="form-control" type="text" id="MiddleName" name="MiddleName" required> <br>

            <label class="form-label" for="PhoneNumber"><h1>Phone Number:</h1></label><br>
            <input class="form-control" type="text" id="PhoneNumber" name="PhoneNumber" required> <br>

            <label class="form-label" for="Email"><h1>Email:</h1></label><br>
            <input class="form-control" type="text" id="Email" name="Email" required> <br>

            <label class="form-label" for="Gender"><h1>Gender:</h1></label><br>
            <input class="form-control" type="text" id="Gender" name="Gender" required> <br>

            <label class="form-label" for="Position"><h1>Position:</h1></label><br>
            <input class="form-control" type="text" id="Position" name="Position" required> <br>

            <label class="form-label" for="Salary"><h1>Salary:</h1></label><br>
            <input class="form-control" type="text" id="Salary" name="Salary" required> <br>

            <label class="form-label" for="DateOfBirth"><h1>Date of Birth:</h1></label><br>
            <input class="form-control" type="date" id="DateOfBirth" name="DateOfBirth" required> <br>

            <label class="form-label" for="Address"><h1>Address:</h1></label><br>
            <input class="form-control" type="text" id="Address" name="Address" required> <br>

            <label class="form-label" for="ZipCode"><h1>Zip Code:</h1></label><br>
            <input class="form-control" type="text" id="ZipCode" name="ZipCode" required> <br>

            <label class="form-label" for="RFC"><h1>RFC:</h1></label><br>
            <input class="form-control" type="text" id="RFC" name="RFC" required> <br>

            <label class="form-label" for="SocialSecurity"><h1>Social Security:</h1></label><br>
            <input class="form-control" type="text" id="SocialSecurity" name="SocialSecurity" required> <br>

                <label class="form-label" for="EmployeeTypeID"><h1>Employee Type:</h1></label><br>
                <select class="form-control" id="EmployeeTypeID" name="EmployeeTypeID" required>
                    
                    <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consulta = "SELECT EmployeeTypeID, Namee FROM employeetype WHERE Status = 1";
                    $resultado = $conn->query($consulta);
    
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['EmployeeTypeID'] . '">' . $row['Namee'] . '</option>';
                    }
    
                    $conn->close();
                    ?>
                </select>
            </select>

            <input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </center>
</body>
</html>

