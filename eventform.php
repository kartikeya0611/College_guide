<?php
$Name = filter_input(INPUT_POST, 'Name');
$EMail = filter_input(INPUT_POST, 'EMail');
$gender = filter_input(INPUT_POST, 'gender');
$mob = filter_input(INPUT_POST, 'mob');
$erp = filter_input(INPUT_POST, 'erp');
if (!empty($Name)||!empty($EMail)||!empty($gender)||!empty($mob)||!empty($erp)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "college";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO event (name, EMail,gender,mob,erp)
values ('$Name','$EMail','$gender','$mob','$erp')";
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
