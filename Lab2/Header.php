<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Header Loop</title>
</head>
<body>
<!--  step 1  --><?php
   $text = "text";
        for ($i = 1; $i<=7; $i++){
        switch($i){
        case 1:
            echo "<h1>". $text. "</h1>" ;break;
        case 2:
            echo "<h2>". $text. "</h2>" ; break;
        case 3:
            echo "<h3>". $text. "</h3>" ; break;
        case 4:
            echo "<h4>". $text. "</h4>" ; break;
        case 5:
            echo "<h5>". $text. "</h5>" ; break;
        case 6:
            echo "<h6>". $text. "</h6>" ; break;
        default:
            echo "That isn't a header man" ; break;
            }
        };

?>
<br/>

<?php
    $text= "Hello, World ";

    echo $text;
    function pass_by_value($text){
         $text .= "blah";

    }
pass_by_value($text);
echo $text;

?>
<br/>
<br/>
<!--this is part 2-->

<?php
function pass_by_ref(&$text){
    $text .= "blah";

}
pass_by_ref($text);
echo $text;

?>
<br/>
<!--this is part 3-->
<?php
$age = 25;
function ager() {
echo "<h1>"."you are " . $GLOBALS["age"] . " years old"."</h1>";
}
?>
<!--part 4-->


</body>
</html>

