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
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
<?php
//will not pass for some reason

$firstName = $_POST['first'];
$lastName = $_POST['last'];

echo "test" . $firstName;

require_once('dbConn.php');
$db = getDBConnection();

$result=mysqli_query($db, "INSERT INTO actor (first_name, last_name)
                    VALUES ('$firstName' , '$lastName')");
$result2 = mysqli_query($db, "SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10 ");

if (!$result2) {
    die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
}

while ($row = mysqli_fetch_assoc($result2))
{
    echo "<tr>";
    echo "<td>" . $row['actor_id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "</tr>";

}


?>

</tbody>
</table>
</br>
<form action="deleteActor.php" method="post">
    ID To Delete <input type="text" name="IdDelete">
    <input type="submit" value="Delete">
</form>
</br>
<form action="updateActor.php" method="post">
    ID To Update <input type="text" name="IdUpdate">
    <input type="submit" value="Update">
</form>
</body>