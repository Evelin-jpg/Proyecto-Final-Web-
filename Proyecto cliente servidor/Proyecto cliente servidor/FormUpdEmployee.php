<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["EmployeeID"];
 require ('cn.php');
$consulta = "SELECT * FROM Employee WHERE EmployeeID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo '<center>
        <form class="col-6" action="UpdEmployee.php" method="post">
            <label class="form-label" for="FirstName"><h1>First Name:</h1></label><br>
            <input class="form-control" type="text" id="FirstName" name="FirstName" value="'.$registro["FirstName"].'" required><br>

            <label class="form-label" for="LastName"><h1>Last Name:</h1></label><br>
            <input class="form-control" type="text" id="LastName" name="LastName" value="'.$registro["LastName"].'" required><br>

            <label class="form-label" for="MiddleName"><h1>Middle Name:</h1></label><br>
            <input class="form-control" type="text" id="MiddleName" name="MiddleName" value="'.$registro["MiddleName"].'" required><br>

            <label class="form-label" for="PhoneNumber"><h1>Phone Number:</h1></label><br>
            <input class="form-control" type="text" id="PhoneNumber" name="PhoneNumber" value="'.$registro["PhoneNumber"].'" required><br>

            <label class="form-label" for="Email"><h1>Email:</h1></label><br>
            <input class="form-control" type="text" id="Email" name="Email" value="'.$registro["Email"].'" required><br>

            <label class="form-label" for="Gender"><h1>Gender:</h1></label><br>
            <input class="form-control" type="text" id="Gender" name="Gender" value="'.$registro["Gender"].'" required><br>

            <label class="form-label" for="Position"><h1>Position:</h1></label><br>
            <input class="form-control" type="text" id="Position" name="Position" value="'.$registro["Position"].'" required><br>

            <label class="form-label" for="Salary"><h1>Salary:</h1></label><br>
            <input class="form-control" type="text" id="Salary" name="Salary" value="'.$registro["Salary"].'" required><br>

            <label class="form-label" for="DateOfBirth"><h1>Date of Birth:</h1></label><br>
            <input class="form-control" type="date" id="DateOfBirth" name="DateOfBirth" value="'.$registro["DateOfBirth"].'" required><br>

            <label class="form-label" for="Address"><h1>Address:</h1></label><br>
            <input class="form-control" type="text" id="Address" name="Address" value="'.$registro["Address"].'" required><br>

            <label class="form-label" for="ZipCode"><h1>Zip Code:</h1></label><br>
            <input class="form-control" type="text" id="ZipCode" name="ZipCode" value="'.$registro["ZipCode"].'" required><br>

            <label class="form-label" for="RFC"><h1>RFC:</h1></label><br>
            <input class="form-control" type="text" id="RFC" name="RFC" value="'.$registro["RFC"].'" required><br>

            <label class="form-label" for="SocialSecurity"><h1>Social Security:</h1></label><br>
            <input class="form-control" type="text" id="SocialSecurity" name="SocialSecurity" value="'.$registro["SocialSecurity"].'" required><br>

            <label class="form-label" for="EmployeeTypeID"><h1>Employee Type:</h1></label><br>
            <select class="form-control" id="EmployeeTypeID" name="EmployeeTypeID" required>';

            ?>
                <?php
                $consultaEmployeeType = "SELECT EmployeeTypeID, Namee FROM employeetype WHERE Status = 1";
                $resultadoEmployeeType = $conn->query($consultaEmployeeType);

                while ($rowEmployeeType = $resultadoEmployeeType->fetch_assoc()) {
                    $selected = ($rowEmployeeType['EmployeeTypeID'] == $registro['EmployeeTypeID']) ? 'selected' : '';
                    echo '<option value="' . $rowEmployeeType['EmployeeTypeID'] . '" ' . $selected . '>' . $rowEmployeeType['Namee'] . '</option>';
                }
                ?>
            </select>
            <?php

        echo'<input class="btn btn-primary" type="submit" value="Modificar">
            <input class="form-label" type="hidden" id="EmployeeID" name="EmployeeID" value="'.$id.'">
        </form>
    </center>';
}
?>
</body>
</html>
