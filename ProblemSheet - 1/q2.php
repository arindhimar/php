<?php

session_start();

$array=array(
    'srno'=>1,
    'sname'=>'arin',

);

$_SESSION['sarr']=$array;

echo $array['srno'];
echo $array['sname'];


?>