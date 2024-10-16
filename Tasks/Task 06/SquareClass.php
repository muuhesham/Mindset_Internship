<?php

include "./ResizeInterface.php";

class Square implements Resizable {

    private $sideLength;

    
    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    
    public function calculateArea() {
        return $this->sideLength * $this->sideLength;
    }

    public function resize($factor) {
        $this->sideLength *= $factor;
    }

}

$square = new Square(4);

echo "Original Area: " . $square->calculateArea() . "<br>";

$square->resize(2);

echo "New Area: " . $square->calculateArea();

