<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $email = $_POST["txtemail"];
    $jobtype = $_POST["txtjob"];
    $salary = $_POST["txtsalary"];


    $ptname="/^[A-Za-z]{1,}$/i";
    $ptpass="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
    $ptemail="/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $ptsal="/^[1-9]{1}[0-9]{2,}$/";

    // echo preg_match($ptname,$username);
    // echo preg_match($ptpass,$password);
    // echo preg_match($ptemail,$email);
    // echo preg_match($ptsal,$salary);

    if(preg_match($ptname,$username)&&preg_match($ptpass,$password)&&preg_match($ptemail,$email)&&preg_match($ptsal,$salary)){
        // Display the variables
        echo "<h2>Form Data:</h2>";
        echo "<pre>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Job Type: " . $jobtype . "<br>";
        echo "Salary: " . $salary . "<br>";
        echo "</pre>";
    }

        



    

    // Perform further processing or validation here
    exit();
}
