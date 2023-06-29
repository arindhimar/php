<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $arr1 = array("ele1","ele2","ele3");

    $i=0;


    echo "for loop";
    for($i=0;$i<count($arr1);$i++)
    {
        echo "<br>";
        echo $arr1[$i];
    }
    echo "<br>";


    $i=0;
    echo "while loop";
    while($i<count($arr1))
    {
        echo "<br>";
        echo $arr1[$i];
        $i++;
    }
    echo "<br>";


    echo "Do While <br>";

    $i=0;

    do
    {
        echo "<br>";    
        echo $arr1[$i];
        $i=$i+1;
    }while($i<count($arr1));

    ?>
</body>
</html>