<?php
$Name=$_POST['task1'];
echo " Name: $Name <br>";
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}

$Password=$_POST['task2'];
echo " Password: $Password <br>";

$Gender=$_POST['task3'];
echo " Gender: $Gender <br>";

$Email=$_POST['task4'];
echo " Email: $Email <br>";

$Phone=$_POST['task5'];
echo " Phone: $Phone <br>";

$Address=$_POST['task6'];
echo " Address: $Address <br>";
?>
