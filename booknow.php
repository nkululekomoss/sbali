<?php
    include_once 'booking.php';

$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$hours = $_POST["hours"];
$payment = $_POST["payment"];

$sql = "INSERT INTO bookings (name, email, date, time, hours, payment) VALUES ('$name', '$email', '$date', '$time', '$hours', '$payment')";
mysqli_query($conn, $sql);

header("Location: index.php?book=success");
