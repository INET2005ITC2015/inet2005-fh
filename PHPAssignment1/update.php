<?php
require_once('dbConn.php');
$db = getDBConnection();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
    <?php
    //this grabs all the info for the id that id given in by the user, this then passes into the form below.
    $update = $_POST['Update'];
    $result = mysqli_query($db, "SELECT * FROM employees WHERE emp_no = $update");
    if (!$result) {
        die ("Could not retrieve records from Employees " . mysqli_error($db));
    }
    $record = mysqli_fetch_assoc($result);
    ?>
    <form id="updateEmp" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" name="updateEmp">
        <label>First Name: </label>
        <input id="fName" name="fName" type="text" value="<?= $record['first_name'] ?>" required></br>
        <label>Last Name: </label>
        <input id="lName" name="lName" type="text" value="<?= $record['last_name'] ?>" required></br>
        <label>Gender: </label>
        <input id="male" name="gender" type="radio" value="M" <?php if ($record['gender'] == "M") {
            echo "checked";
        } ?>>
        <label for="male">Male</label>
        <input id="female" name="gender" type="radio" value="F" <?php if ($record['gender'] == "F") {
            echo "checked";
        } ?>>
        <label>Female</label><br/>
        <label>Birth Date (YYYY-MM-DD): </label>
        <input id="DOB" type="text" name="DOB" value="<?= $record['birth_date'] ?>" required></br>
        <label>Hire Date (YYYY-MM-DD): </label>
        <input id="hireDate" type="text" name="hireDate" value="<?= $record['hire_date'] ?>" required></br>
        <input type="hidden" name="Update" value="<?= $record['emp_no'] ?>">
        <input name="submit" type="submit" value="Update Record">
    </form>

    <?php

    $update = $_POST['Update'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $gender = $_POST['gender'];
    $hireDate = $_POST['hireDate'];
    $DOB = $_POST['DOB'];

    $result = mysqli_query($db, "UPDATE employees SET first_name='$fName', last_name='$lName', gender='$gender',
              hire_date='$hireDate', birth_date='$DOB' WHERE emp_no = $update");

    if (!$result) {
        die ("Could not update records from Employees " . mysqli_error($db));
    } else {
        echo "Number of updated rows: " . mysqli_affected_rows($db);
    }
    ?>
    <a href="MainPage.php">Back to Index</a>
    </body>
</html>