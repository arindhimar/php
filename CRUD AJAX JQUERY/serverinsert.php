<?php


include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$sql="insert into crud1(name,email,password,mobile) values('$name','$email','$password','$mobile')";


$res=mysqli_query($con,$sql);

if($res)
{
    echo"data done";
}
else
{
    echo"error";
}


?>