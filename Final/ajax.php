<?php

include 'connection.php';

$flag = $_POST['flag'];

if ($flag == 1) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];


    $sql = "INSERT INTO crud1 (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";

    $cmd = mysqli_query($con, $sql);
} 
else if ($flag == 2) {
    $sql = "select * from crud1";

    $res = mysqli_query($con, $sql);

    $resp = "        <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Mobile</th>
    </tr>";
    echo $resp;



    while ($row = mysqli_fetch_assoc($res)) {
        $resp = "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["email"]}</td><td>{$row["password"]}</td><td>{$row["mobile"]}</td></tr>";
        echo $resp;
    }
}
else if($flag==3)
{
    $name=$_POST['name'];
    $sql = "select * from crud1 where name like '{$name}%'";

    $res = mysqli_query($con, $sql);

    $resp = "        <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Mobile</th>
    </tr>";
    echo $resp;



    while ($row = mysqli_fetch_assoc($res)) {
        $resp = "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["email"]}</td><td>{$row["password"]}</td><td>{$row["mobile"]}</td></tr>";
        echo $resp;
    }
}
