<?php
abstract class rectangle extends shapes
{
    var $width;
    var $length;
    var $name = 'rectangle';
function calculateSize()
{
    $area = ($this->width * $this->length);
    return $area;

}
}