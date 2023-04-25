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
} else if ($flag == 2) {
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
        $resp = "<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["email"]}</td><td>{$row["password"]}</td><td>{$row["mobile"]}</td><td><button type='button' onclick='updt({$row["id"]})' class='btn btn-light'>Edit</button><button type='button' class='btn btn-warning' onclick='del({$row["id"]})'>Delete</button></td></tr>";
        echo $resp;
    }
} else if ($flag == 3) {
    $name = $_POST['name'];
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
} else if ($flag == 4) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `crud1` WHERE id={$id}";
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "Query Executed";
    } else {
        echo "Query Not Executed";
    }
}
else if($flag==5)
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];


    $sql = "UPDATE `crud1` SET `name`='{$name}',`email`='{$email}',`password`='{$password}',`mobile`='{$mobile}' WHERE id={$id}";

    $cmd = mysqli_query($con, $sql);


    if ($cmd) {
        echo "Query Executed";
    } else {
        echo "Query Not Executed";
    }
}
