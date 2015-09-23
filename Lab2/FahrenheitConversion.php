<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Converter</title>
    <!----this is the code for the table --->
    <style type="text/css">
        table, td, th{
            border: 1px solid black;
        }
        /*this is the css code for the background change */
        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #FFF}
        th {background: #ccc;}
    </style>
</head>
<body>
<a href="FahrenheitConversion.php">Fahrenheit  </a>
<a href="celsisConversion.php">Celsius</a>
    <table>
        <thead>
            <th>Fahrenheit</th>
            <th>Celsius</th>
        </thead>
        <tbody>
            <?php
            for ($i=0; $i <= 100; $i+=1) {
                echo "<tr>";
                echo "<td>$i</td>";
                $celsius = round((($i - 32) * (5 / 9)));
                echo "<td>$celsius</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>