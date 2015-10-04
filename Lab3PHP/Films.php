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
            <tr><th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
    <?php
        require_once('dbConn.php');
       $db = getDBConnection();


        $result = mysqli_query($db,"SELECT * FROM film LIMIT 0,10");
        if(!$result)
        {
            die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
        }
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";

        }


    ?>

        </tbody>
    </table>
    </body>
</html>

