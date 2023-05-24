<?php

include 'connection.php';

$sql="select * from crud1";

$res=mysqli_query($con,$sql);

$resp="";



    while($row=mysqli_fetch_assoc($res))
    {
        $resp.="<tr><td>{$row["id"]}</td><td>{$row["name"]}</td><td>{$row["email"]}</td><td>{$row["password"]}</td><td>{$row["mobile"]}</td></tr>";    
        echo $resp;
    }



    
    
    
