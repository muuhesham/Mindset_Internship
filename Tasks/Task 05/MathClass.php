<?php

class Math{
    static public $num1;
    static public $num2;

    function __construct($Num1 , $Num2){
        self::$num1=$Num1;
        self::$num2=$Num2;
    }
    static function add(){
        return self::$num1 + self::$num2 . "<br>";
    }
    static function substruct(){
        return self::$num1 - self::$num2 . "<br>";
    }
    static function multiply(){
        return self::$num1 * self::$num2 ."<br>";
    }
}

$math = new Math (10,20);
$math::$num1 = 30; $math::$num2=40;
echo $math -> add();
echo $math -> substruct();
echo $math -> multiply();