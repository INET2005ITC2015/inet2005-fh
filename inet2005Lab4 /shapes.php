<?php
abstract class shapes
{
    protected $name;

    public function contruct(){


    }

    function calculateSize($name)
    {
    if ($name = 'circle'){
       $area = pi() * (pow($radius, 2));
        else if ($name = 'triangle') {
            $area = (($base * $height) / 2);
        }
        else if ($name = 'rectangle') {
            $area = $width * $length

        }
    }

    }

}
