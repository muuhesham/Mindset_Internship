<?php
#- PHP Program to Check an Element Exists in Array or Not
$arr=["football","basketball","vollyball","tennis","handball"];
if(in_array("basketball",$arr)){
    echo("The Element exist in array");
}else echo("The Element doesn't exist in array");