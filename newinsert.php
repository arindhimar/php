<?php

include "connect.php";

if(isset($_POST['submitdet']))
{
    //echo"done";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $sql="insert into crud1 (name,email,password,mobile) values('$name','$email','$password','$mobile')";

    $res=mysqli_query($con,$sql);

    // if($res)
    // {
    //     echo"data inserted";
    // }
    // else
    // {
    //     echo"insertion failed";
    // }






}




?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <div class="mt-3">
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="newdisplay.php">Display</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Delete</a>
  </li>
</ul>
</div>
  
  <form method="post" action="newinsert.php">

  <div class="m-5">
    <label class="form-label">Name</label>
    <input type="text" class="form-control"   name="name">
  </div>


  <div class="m-5">
    <label class="form-label">Email address</label>
    <input type="text" class="form-control"   name="email">
  </div>

  <div class="m-5">
    <label class="form-label">Password</label>
    <input type="text" class="form-control"   name="password">
  </div>

  <div class="m-5">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control"   name="mobile">
  </div>



  <div class="m-5" >
  <button type="submit" name="submitdet"  class="btn btn-primary">Submit</button>
  </div>

  
</form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>