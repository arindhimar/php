<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "asdasdasdas";
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $email = $_POST["txtemail"];
    $jobtype = $_POST["txtjob"];
    $salary = $_POST["txtsalary"];

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
?>
