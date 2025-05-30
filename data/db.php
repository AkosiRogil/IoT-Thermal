<?php

// Database Connection

$serv = 'localhost';
$user = 'root';
$pass = '';
$db = 'Thermal_db';


$conn = new mysqli($serv,$user,$pass,$db);

if($conn->connect_error){
    die ("connection failed: " . $conn->connect_error);
}
else{
    echo "connection successful";
}
?>
