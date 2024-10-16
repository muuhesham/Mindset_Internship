<?php

class Student {
    public $name;
    public $age;
    public $grade;

    # constructor method to show the info when call the object 
    function __construct( $n,  $a ,  $g){
        if(is_string($n)){
            echo "name:".$this->name=$n . "<br>";
        }else echo "error <br>";
        
        echo "age:".$this->age=$a . "<br>";
        echo "grade:".$this->grade=$g . "<br>";
    }
}

$student = new Student("muhammed",18,1);