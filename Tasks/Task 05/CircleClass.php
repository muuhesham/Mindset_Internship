<?php

class Circle {
    public $radius;

    function __construct($r ){
        $this->radius=$r;
    }

    function circleArea(){
        return 3.14 * ($this->radius) ** 2 . "<br>";
    }
    function circleCircumference(){
        return 2*3.14*($this->radius) . "<br>";
    }
}

$cir = new Circle(4);
echo $cir -> circleArea();
echo $cir ->circleCircumference();