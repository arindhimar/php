<?php
include "conn.php";

$flag=mysqli_real_escape_string($con,$_POST['flag']);

if($flag==1){//insert data
    $sname=mysqli_real_escape_string($con,$_POST['sname']);
    $semail=mysqli_real_escape_string($con,$_POST['semail']);
    $spass=mysqli_real_escape_string($con,$_POST['spass']);
    $sdob=mysqli_real_escape_string($con,$_POST['sdob']);


    $query = 'INSERT INTO `studenttb`(`sname`, `semail`, `spass`, `sdob`) VALUES ("' . $sname . '","'. $semail. '","' . $spass . '","' . $sdob . '")';

    if(mysqli_query($con,$query)){
        $tempResponse=array('result'=>1);
        echo json_encode($tempResponse);
    }
    else{
        $tempResponse=array('result'=>0);
        echo json_encode($tempResponse);
    }
    
}
else if($flag==2){//disp all data
    $query = "select * from studentTb";

    $res = mysqli_query($con, $query);

    if (mysqli_num_rows($res) > 0){
        
        $allData="";

        $allData.= "<table align='center'>";
        $allData.= "<tr><th>SID</th><th>Name</th><th>Email</th><th>Password</th><th>DOB</th><th colspan='2'>Function</th></tr>";
        while ($tempData = mysqli_fetch_assoc($res)) {
            $allData.= "<tr><td>" . $tempData['sid'] . "</td><td>" . $tempData['sname'] . "</td><td>" . $tempData['semail'] . "</td><td>" . $tempData['spass'] . "</td><td>" . $tempData['sdob'] . "</td><td colspan='2'> <input  type='submit'  value='Delete' onclick='deleteData(".$tempData['sid'].")'><input  type='submit'  value='Update' onclick='getOldData(".$tempData['sid'].")'></td>  </tr>";
        }
        $allData.="</table>";

        $tempResponse=array('result'=>1,'data'=>$allData);
        echo json_encode($tempResponse);
    }
    else{
        $tempResponse=array('result'=>0);
        echo json_encode($tempResponse);
    }
}
else if($flag==3){//delete data
    $sid =mysqli_real_escape_string($con,$_POST['sid']);
    
    $query="delete from studenttb where sid=$sid";

    if(mysqli_query($con,$query)){
        $tempResponse=array('result'=>1);
        echo json_encode($tempResponse);
    }
    else{
        $tempResponse=array('result'=>0);
        echo json_encode($tempResponse);
    }
}
else if($flag==4){//request for old data
    $sid=mysqli_real_escape_string($con,$_POST['sid']);

    $query="select * from studenttb where sid=".$sid;

    if($res=mysqli_query($con,$query)){
        $tempData=mysqli_fetch_assoc($res);
        $tempResponse=array('result'=>1,'data'=>$tempData);
        echo json_encode($tempResponse);
    }
    else{
        $tempResponse=array('result'=>0);
        echo json_encode($tempResponse);
    }
}
else if($flag==5){//update data
    $sid=mysqli_real_escape_string($con,$_POST['sid']);
    $sname=mysqli_real_escape_string($con,$_POST['sname']);
    $semail=mysqli_real_escape_string($con,$_POST['semail']);
    $spass=mysqli_real_escape_string($con,$_POST['spass']);
    $sdob=mysqli_real_escape_string($con,$_POST['sdob']);
    

    $query = 'UPDATE `studenttb` SET `sname`="' . $sname . '", `semail`="' . $semail . '", `spass`="' . $spass. '", `sdob`="' . $sdob . '" WHERE `sid`=' . $sid;

    if(mysqli_query($con,$query)){
        $tempResponse=array('result'=>1);
        echo json_encode($tempResponse);
    }
    else{
        $tempResponse=array('result'=>0);
        echo json_encode($tempResponse);
    }
}


?>