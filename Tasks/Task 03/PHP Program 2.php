<?php
#- Remove duplicate values from an array
$arr=["ox","cat","dog","rabbit","dog","snake","ox"];
$arr2=["ox","cat","dog","rabbit","snake"];
#array_unique() -> remove duplicate values form the array // don't chane the main array
print_r(array_unique($arr));
echo("<br>");
print_r(array_unique($arr2)); // if the array not contain any duplicate values not affect in output

