<?php

class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calcArea(){
        return $this->length * $this->width;
    }

    public function calcPerimeter(){
        return ($this->length + $this->width) * 2;
    }
}

$rectangle = new Rectangle(4,6);
echo "Area of Rectangle: ". $rectangle->calcArea() . "<br>";
echo "Perimeter of Rectangel ". $rectangle->calcPerimeter() . "<br>";