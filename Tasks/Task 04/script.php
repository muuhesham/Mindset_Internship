<?php

# TASK
// create a PHP script that simulates a simple calculator. It should take two numbers and an operator (+, -,
//////////////////////////////////////////////////////

#php Script

function calculator ($number1, $number2, $operator){
    $result = null;

    if((!is_numeric($number1)) or (!is_numeric($number2))){
        echo "Error: invalid input numbers. please input numbers only :)";
        return;
    }
    if(!($operator == "+" || $operator == "-" || $operator == "/" || $operator == "*" || $operator == "%" || $operator == "^")){
        echo "Error: invalid operator. please input operators like (+ , - , * , / , % , ^)";
        return;
    }

    if($operator == "+"){
        $result = $number1 + $number2;
    } elseif ($operator == "-"){
        $result = $number1 - $number2 ;
    } elseif ($operator == "*"){
        $result = $number1 * $number2 ;
    } elseif ($operator == "/"){
        if ($number2 == 0){
            return "Error: Division by Zero. Please provide a non-zero divisor. ";
        } else {
            $result = $number1 / $number2 ;
        }
    } elseif ($operator == "%"){
        $result = $number1 % $number2 ;
    } elseif ($operator == "^") {
        $result = $number1 ** $number2 ;
    }
    else {
        return "Error: Check your input numbers or operator and try again!";
    }

    return $result;
}

echo calculator(5,0,"/");
