<?php
require_once('dbConn.php');
$db = getDBConnection();
$delete = $_POST["IdDelete"];
mysqli_query($db, "DELETE FROM actor WHERE actor_id=$delete");

    echo 'Successfully Deleted ' . mysqli_affected_rows($db) . ' record(s)';
    echo "</br>";
    echo '<a href="insertActor.php">Back To Actor List</a>';
