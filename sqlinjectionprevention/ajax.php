<?php

    require 'connection.php';
    

    $flag=$_POST["flag"];

    if($flag==1){

        /*

        //Method - 1

        $uid=mysqli_escape_string($con,$_POST["uid"]);
        
        $upass=mysqli_escape_string($con,$_POST["upass"]);

        $query="select uid from usertb where uid=$uid and upass='$upass'";

        // echo $query;

        $res=mysqli_query($con,$query);

        if(mysqli_num_rows($res)>0){
            echo "Login Successful";
        }
        else{
            echo "Invalid Credentials";
        }


        */


        //Method - 2

        //Step - 1 (Pre Defined Query with ? as parmeter like integer , double , string , blob)
        $query = $con->prepare("select uid from usertb where uid = ? and upass = ?");

        //Step - 2 (Binding the Parameter)
        $query->bind_param("ss",$uid,$upass);

        //Step - 3 (Setting the parameter)
        $uid=$_POST["uid"];
        $upass=$_POST["upass"];

        //Step - 4 Execute the Query
        $query->execute();
        $query->store_result();

        $query->sqlstate;//disp

        if($query->num_rows>0){
            echo "Login Successful";
        }
        else{
            echo "Invalid Credentials";
        }

    }

?>