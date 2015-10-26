<?php
abstract class triangle extends shapes
{
    var $name = 'triangle';
    var $base;
    var $height;
    function calculateSize()
    {
        $area = (($this->base * $this->height) / 2);
        return $area;
    }
}