<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<?php

echo "<h1>  Greetings From Lab1 </h1>";
?>

<p>Deep v gluten-free readymade, Neutra tattooed skateboard 3 wolf moon. Biodiesel art party tofu, cardigan whatever migas street art wolf American Apparel next level. Tote bag keffiyeh selfies, heirloom leggings taxidermy kogi distillery scenester gluten-free drinking vinegar. Semiotics meggings photo booth cray single-origin coffee, Helvetica Intelligentsia Vice cold-pressed pork belly swag keytar Truffaut occupy lumbersexual. Small batch meggings squid, Banksy Austin cred blog leggings paleo meh tilde mumblecore Echo Park skateboard occupy. Pour-over aesthetic gluten-free High Life, fashion axe trust fund kogi McSweeney's iPhone forage. Semiotics farm-to-table pop-up authentic.</p>

<?php

echo "<h3>  The Ongoing Nature Of Lab1 </h3>";
?>
<br>

<?php

// this is the basic set up of declaring a value and outputting it
$firstName = "Findlay Hilchie";
echo $firstName;
?>
</br>

<?php
//this is an example of concatenation of a string
$concatExample = "this" . "is" . "concatenation";
echo $concatExample;
?>
<br>

<?php
//this is an example of math functions
echo (32*14) + 83;
echo "\r\n";
echo (1024/128) - 7;
echo "\r\n";
echo 769%6;
?>
<br>

<?php
////loop to countdown
//$counter = 10;
//
//if ($counter >=0)
//    echo "$counter" . "...";
//    $counter - 1;
//else {
//    echo "Blast Off";
//}
//
//
//?>

<?php
//this is an example of loop
for ($counter = 10; $counter >=0; $counter--)
{
    if ($counter == 0)
        echo "Blast Off";
    else
        echo $counter . "...";
}
?>
<br>


<?php
//this is an example of arrays and loop printing
$colorarray = array("Red", "Black", "Yellow", "Pink", "Green", "Blue", "Orange");
//put for array here


//foreach array
foreach ($colorarray as $color) {
    echo "$color";
    echo "<br>";
}
//print r
print_r ($colorarray);
?>



<br>


</body>
</html>