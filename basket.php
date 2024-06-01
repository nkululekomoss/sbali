<?php

$serverName = "localhost";
$userName = "root";
$password = "615@Nkululeko";
$dbName = "sbali_driving_academy";

//create connection
$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
  echo "Failed to connect!";
  exit();
}
echo "Connection Successful!";