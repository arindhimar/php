<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
        
        ID : <input type="text" name="did" id=""><div ><?php $errid; ?>*</div><br><br>
        
        NAME : <input type="text" name="name" id=""><div ><?php $errname; ?>*</div><br><br>

        CONTACT : <input type="text" name="dnumber" id=""><div ><?php $errnumber; ?>*</div><br><br>
        <input type="button" value="Submit">
    </form>
</body>
</html>



<?php

$did = $dname = $dnumber ="";

$errid=$errname=$errnumber="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["did    q"]))
    {
        $errid="InvalidId";
    }
    else
    {
        $errid="Valid";
    }
}


?>

