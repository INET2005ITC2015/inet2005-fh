<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>First Ten Films</title>
    <style type="text/css">
        table, td, th {
            border: 1px solid black;

        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
<?php
$first = $_POST["first"];
$last = $_POST["last"];

require_once('dbConn.php');
$db = getDBConnection();
mysqli_query($db, "INSERT INTO actor (first_name, last_name) VALUES ($first, $last)");
$result2 = mysqli_query($db, "SELECT * FROM actor");

if (!$result2) {
    die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
}

while ($row = mysqli_fetch_assoc($result2))
{
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "</tr>";

}


?>

</tbody>
</table>
</body>