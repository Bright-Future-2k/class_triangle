<?php


class Shape
{
    public $side1 = 10;
    public $side2 = 10;
    public $side3 = 10;


    public function realTriangle(){
        return $this->side1.$this->side2.$this->side3;
    }
    public function newTriangle($sd1,$sd2,$sd3){
        $this->side1=$sd1;
        $this->side2=$sd2;
        $this->side3=$sd3;

    }
    public function getArea(){
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function getPerimeter(){
        return floor($this->side1 * $this->side1 * sqrt(3)/4);
    }
    public function __toString()
    {
        return "$this->side1.' ' . $this->side2.' '.$this->side3";

    }
}