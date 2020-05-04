<?php
$Name = filter_input(INPUT_POST, 'Name');
$EMail = filter_input(INPUT_POST, 'EMail');
$gender = filter_input(INPUT_POST, 'gender');
$address = filter_input(INPUT_POST, 'address');
$address1 = filter_input(INPUT_POST, 'address1');
$mob = filter_input(INPUT_POST, 'mob');
$Zip = filter_input(INPUT_POST, 'Zip');
$team = filter_input(INPUT_POST, 'team');

if (!empty($Name)||!empty($EMail)||!empty($gender)||!empty($address)||!empty($address1)||!empty($mob)||!empty($Zip) ||!empty($team)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "college";
// Create connection0
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO user (name, EMail,gender,address,address1,mob,Zip,team)
values ('$Name','$EMail','$gender','$address','$address1','$mob','$Zip','$team')";
if ($conn->query($sql)){
header('Location: k2.html');
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Missing value please check form";
die();
}

?>
