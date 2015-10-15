<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Main Employee Directory</title>
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
        <th>Emp. Number</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
    </tr>
    </thead>
    <tbody>
    <?php
//    if (isset($_POST['searchTerm'])) {
//        $search = $_POST ['searchTerm'];
        require_once('dbConn.php');
        $db = getDBConnection();

        if (!isset($_GET['page'])) {
            $page = 0;
        } else {
            $page = $_GET['page'];
        }

        $prev = 0;
        $next = 0;

        if ($page - 25 >= 0) {
            $prev = $page - 25;
            $next = $page + 25;
        } else {
            $prev = 0;
            $next = 25;
        }

        $result = mysqli_query($db, "SELECT * FROM employees LIMIT $page, 25");

        if (!$result) {
            die('Could not retrieve records from the Database: ' . mysqli_error($db));
        }

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['emp_no'] . "</td>";
            echo "<td>" . $row['birth_date'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['Last_name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['hire_date'] . "</td>";
            echo "</tr>";

        }


       ?>

    </tbody>
</table>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="searcher">
    <label>Search: </label><input type="text" name="searchTerm" value ="">
    <input type="submit" value="Submit">
</form>
</br>
<a href="MainPage.php?page=<?= $prev ?>">Prev</a>

<a href="MainPage.php?page=<?= $next ?>">Next</a>
</br>

</body>
</html>

