<?php
require_once('dbConn.php');
$db = getDBConnection();
//retrieve last number in db then add 1 to it.
function lastEmpNum($db)
{
    $result = mysqli_query($db, "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 1");
    $selectedRow = mysqli_fetch_assoc($result);
    $newNum = $selectedRow['emp_no'] + 1;
    return $newNum;
}

$DOB = $_POST['DOB'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$gender = $_POST['gender'];
$hireDate = $_POST['hireDate'];
$empNum = lastEmpNum($db);


$result = mysqli_query($db, "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date)
                               VALUES ('$empNum','$DOB','$fName' , '$lName','$gender','$hireDate')");

if (!$result) {

    die('Could not retrieve records from Database: ' . mysqli_error($db));
} else {
    echo 'Successfully Created ' . mysqli_affected_rows($db) . ' record(s)';
}

echo "<a href='MainPage.php'>Back</a><br/>";
echo "<a href='updateRecords.html'>Insert another</a>";




