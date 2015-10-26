<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <table>
        <tr>
            <td>Circle</td>
        </tr>
        <tr>
            <td>

                <label>Radius
                <input type="text" name="radius" value="<?= $_POST['radius']?>"></label>


            </td>

        </tr>
        <tr>
            <td>Rectangle</td>
        </tr>
        <tr>
            <td>
                <label>Length
                    <input type="text" name="length"  value="<?= $_POST['lenght']?>"></label>
                <label>Width
                    <input type="text" name="width"  value="<?= $_POST['width']?>"></label>

            </td>
        </tr>
        <tr>
            <td>Triangle</td>

        </tr>

        <tr>
            <td>
                <label>Base
                    <input type="text" name="base" value="<?= $_POST['base']?>"></label>
                <label>Height
                    <input type="text" name="height" value="<?= $_POST['height']?>"></label>

            </td>

        </tr>
        <tr>
            <td>
                <label>resize
                    <input type="text" name="percent" value="100"></label>
            </td>

        </tr>

    </table>
    <br>
    <input type="submit" value="Calculate">
</form>

<?php

interface iResizable {
    public function resize ($percent);

}


abstract class shapes
{
    protected $name;

    abstract function calculateSize();


}

class triangle extends shapes implements iResizable
{
    var $name = 'Triangle';
    var $base;
    var $height;

    function triangle($base, $height, $percent){
        $this->base = $base;
        $this->height = $height;
        $this->percent = $this->resize($percent);
    }

    function calculateSize()
    {
        $area = (($this->base * ($this->height * $this->percent)) / 2);
        return $area;
    }
    public function resize ($percent){
        return $percent /= 100;

    }
}

class circle extends shapes implements iResizable
{   var $name = 'Circle';
    var $radius;
    function circle($radius, $percent){
        $this->radius = $radius;
        $this->percent = $this->resize($percent);

    }
    function calculateSize()
    {
        $area = pi() * (pow(($this->radius * $this->percent) , 2));
        return $area;
    }

    public function resize ($percent){
        return $percent /= 100;

    }
}
class rectangle extends shapes
{
    var $width;
    var $length;
    var $name = 'Rectangle';

    function rectangle($width, $length){
        $this->width = $width;
        $this->length = $length;

    }
    function calculateSize()
    {
        $area = ($this->width * $this->length);
        return $area;

    }}
?>


<?php
if (isset($_POST['radius'])) {
    $myCircle = new circle($_POST['radius'], $_POST['percent']);
    echo '<h1>' . 'Shape: ' . $myCircle->name . '</h1>'.'</br>';
    echo 'area: ' . $myCircle->calculateSize();
}

if (isset($_POST['length']) && ($_POST['width']) ) {
    $myRectangle = new rectangle($_POST['length'], $_POST['width']);
    echo '<h1>' . 'Shape: ' . $myRectangle->name . '</h1>'.'</br>';
    echo 'area: ' . $myRectangle->calculateSize();
}

if (isset($_POST['base']) && ($_POST['height']) ) {
    $myTriangle = new triangle($_POST['base'], $_POST['height'],$_POST['percent']);
    echo '<h1>' . 'Shape: ' . $myTriangle->name . '</h1>'. '</br>';
    echo 'area: ' . $myTriangle->calculateSize();
}
?>



</body>
</html>

