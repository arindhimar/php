<?php

session_start();

$storearr=$_SESSION['sarr'];

echo $storearr['srno'];
echo $storearr['sname'];

?>