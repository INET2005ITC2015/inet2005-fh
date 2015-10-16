<?php
    require 'isLoggedIn.php';
    checkIfLoggedIn();
?>
?>
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
    //don't move me I open the BD connection
    $search = $_POST ['searchTerm'];
    require_once('dbConn.php');
    $db = getDBConnection();
    //sets the search term that the search field collects, this is here because it is also used by
    //the sticky nature of the form, it keeps the name searched by echoing the variable.
    $searchTerm = $_GET['searchTerm'];
    //this checks to see if the page is set and then if not it sets it to 0
    //if it is set than it uses the controls below it to iterate through the page number
    //it corresponds to the values in the buttons used to navigate/
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

    //I am the search feature table with pagination, I work on an if else if there is no search I just jump down and use the pagination and the
    //other block of table code, see below.
        if (isset($_GET['searchTerm'])) {
            $result = mysqli_query($db, "SELECT * FROM employees WHERE first_name LIKE '%$searchTerm%' LIMIT $page, 25");

            if (!$result) {
                die('Could not retrieve records from the Database: ' . mysqli_error($db));
            }

            while ($row = mysqli_fetch_assoc($result)) {

                echo "<tr>";
                echo "<td>" . $row['emp_no'] . "</td>";
                echo "<td>" . $row['birth_date'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['hire_date'] . "</td>";
                echo "<td><form action='update.php' method='post'>
                            <input type='image' src='img/edit32.png' name='Update' value=" . $row['emp_no'] . "></form>";
                echo "<td><form action='delete.php' method='post'>
                            <input type='image' src='img/delete32.png' name='Delete' value=" . $row['emp_no'] . "></form>";
                echo "</tr>";
                echo "</tr>";
            }
        }

    else {
        // if there is no search then the else will run and it will give a pagenated select of data from employees
        $result = mysqli_query($db, "SELECT * FROM employees LIMIT $page, 25");

        if (!$result) {
            die('Could not retrieve records from the Database: ' . mysqli_error($db));
        }

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $row['emp_no'] . "</td>";
            echo "<td>" . $row['birth_date'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['hire_date'] . "</td>";
            echo "<td><form action='update.php' method='post'>
            <input type='image' src='img/edit32.png' name='Update' value=" . $row['emp_no'] . "></form>";
            echo "<td><form action='delete.php' method='post'>
            <input type='image' src='img/delete32.png' name='Delete' value=" . $row['emp_no'] . "></form>";
            echo "</tr>";
            echo "</tr>";
        }
    }
       ?>

    </tbody>
</table>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" name="searcher">
    <label>Search: </label><input type="text" name="searchTerm" value ="<?php echo $searchTerm;?>">
    <input type="submit" value="Submit">
</form>
</br>
<a href="MainPage.php?page=<?= $prev ?>&searchTerm=<?= $searchTerm ?>">Prev</a>

<a href="MainPage.php?page=<?= $next ?>&searchTerm=<?= $searchTerm ?>">Next</a>
<a href ="updateRecords.html">Update Records</a>
<a href ="logOut.php">Logout</a>
</br>

</body>
</html>

