<?php
#- Change on item in the array from lower case to upper case
$arr=["red","blue","green","BLACK","BLUE"];

# change one item in array to upper
$item=$arr[0];
if(strtoupper($item)==$item){
    echo ("the item is already uppercase! and the item : $item");
}else echo ("the item changed to uppercase! and the item: ". strtoupper($item)."");

echo("<br>");
# change all the items in array to upper
$arr = array_flip($arr);
$arr = array_change_key_case($arr,CASE_UPPER);
$arr = array_flip($arr);
print_r($arr);

//array_change_key_case() Function to change the keys of array to lower or upper
//array_flip() function to change the value to key and can use array_change_key_case