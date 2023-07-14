<?php

$x=0;
$y=0;
$z=0;

function fun($t1,$t2){
    global $x,$y,$z;
    $x=$t1;
    $y=$t2;
    $z=$x+$y;
    echo $z;
}

fun(10,5);

?>