<?php

class Vehicle {
    public $brand;
    public $model;
    public $year;

    function __construct($b,$m,$y){
        echo "brand: ". $this->brand=$b . "<br>";
        echo "model: ". $this->model=$m . "<br>";
        echo "year: ". $this->year=$y . "<br>";
    }
} 

$vec = new Vehicle("BMW","mb23","2009");