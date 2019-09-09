<?php
include_once ('Shape.php');

$triangle = new Shape();
echo "dien tich1: ".$triangle->getArea()."<br>";
echo "chu vi1: ".$triangle->getPerimeter()."<br>";
$triangle->realTriangle();

$triangle->newTriangle(15,16,17);
echo "dien tich2: ".$triangle->getArea()."<br>";
echo "chu vi2: ".$triangle->getPerimeter()."<br>";
$triangle->realTriangle();
