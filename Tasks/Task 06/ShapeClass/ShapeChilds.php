<?php

include "./ShapeClass.php";

class Triangle extends Shape {
    public $base;
    public $height;

    
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;

    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(10, 5);
echo "Triangle Area: " . $triangle->calculateArea() . "<br>"; 

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>"; 