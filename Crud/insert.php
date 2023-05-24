<?php
include 'connect.php';


if(isset($_POST['savedetails']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];


    $sql="insert into crud1 (name,email,password,mobile) values('$name','$email','$password','$mobile')";


    $res=mysqli_query($con,$sql);
    

    // if($res)
    // {
    //     echo"InsertDone";
    // }
    // else
    // {
    //     echo"InsertFail";
    // }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
  <label for="name">Name:</label>
  <input type="text"  name="name"><br>

  <label for="email">Email:</label>
  <input type="text"  name="email"><br>

  <label for="password">Password:</label>
  <input type="text" name="password"><br>

  <label for="mobile">Mobile:</label>
  <input type="text"  name="mobile"><br>

  <button type="submit" name='savedetails'>Save</button>

</form>

</body>
</html>