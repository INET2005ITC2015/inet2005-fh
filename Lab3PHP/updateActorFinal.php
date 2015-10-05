<?php
require_once('dbConn.php');
$db = getDBConnection();

if (isset($_POST['IdUpdate'])) {
    $update = $_POST["IdUpdate"];
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];

    $result=mysqli_query($db, "UPDATE actor SET first_name='$first' , last_name='$last' WHERE actor_id=$update");
}
else {
    echo "Can't see stuff";
}

echo 'Successfully updated ' . mysqli_affected_rows($db) . ' record(s)';
echo "</br>";
echo '<a href="insertActor.php">Back To Actor List</a>';