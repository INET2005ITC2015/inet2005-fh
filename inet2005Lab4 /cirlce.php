<?php
abstract class circle extends shapes
{   var $radius;
    var $name = 'circle';
     function calculateSize()
    {
        $area = pi() * (pow($this->radius, 2));
        return $area;
    }

}