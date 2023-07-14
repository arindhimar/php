<?php

$grade="";

function fun($temp){
    global $grade;
    if($temp>=85){
        $grade='A';
    }
    else if($temp>=75&&$temp<85){
        $grade='B';
    }
    else if($temp>=60&&$temp<75){
        $grade='B';
    }
    else{
        $grade='F';
    }
}

fun(90);

echo $grade;

?>