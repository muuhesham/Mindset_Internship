<?php
#- PHP Program sort array by key
$arr=["Nike"=>56,"Addides"=>88,"pumma"=>23,"ab"=>41,15=>15,14=>3]; // key integr or string // value can be any datatype
# ksort -> sort the array by the key (ascending order smallest to largest) (ASCII CODE)
# note : the sort function change tha main array
ksort($arr);
print_r($arr);
echo("<br>");
#krsort -> sort the array by the key (descending order largest to smallest) (ASCII CODE)
krsort($arr);
print_r($arr);

#all sort functions in array
//sort //ksort //asort
//rsort //krsort //arsort