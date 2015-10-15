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
        <th>Title</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($_POST['searchTerm'])) {
        $search = $_POST ['searchTerm'];
        require_once('dbConn.php');
        $db = getDBConnection();
        $result = mysqli_query($db, "SELECT * FROM film WHERE description LIKE '%$search%' LIMIT 0,25");
        if (!$result) {
            die('Could not retrieve records from the Database: ' . mysqli_error($db));
        }
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";

        }
    }
    ?>

    </tbody>
</table>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="searcher">
    Search: <input type="text" name="searchTerm" value ="">
    <input type="submit" value="Submit">
</form>
</br>
</body>
</html>

