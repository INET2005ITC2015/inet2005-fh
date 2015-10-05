<?php
require_once('dbConn.php');
$db = getDBConnection();
$update = $_POST["IdUpdate"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];


mysqli_query($db, "UPDATE actor set first_name=$firstName AND last_name=$lastName WHERE  actor_id=$update");

    echo 'Successfully updated ' . mysqli_affected_rows($db) . ' record(s)';
    echo "</br>";
    echo '<a href="insertActor.php">Back To Actor List</a>';
