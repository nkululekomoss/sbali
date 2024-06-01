<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
</head>
<body>
  
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

//create connection
/*try{
  $con = new PDO("mysql:host=$serverName;dbName=$dbName", $userName, $password);

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Success!" . $e->getMessage();
}*/


/*if ( isset($fname) ||  isset($email) ||  isset($date) ||  isset($time)  ||  isset($hours) ||  isset($payment) ) {

$file = fopen("booking.html","a");
fwrite($file, "<b>Name</b>". $fname."<br>");
fwrite($file, "<b>Email</b>". $email."<br>");
fwrite($file, "<b>Date</b>". $date."<br>");
fwrite($file, "<b>Time</b>". $time."<br>");
fwrite($file, "<b>Hours</b>". $hours."<br>");
fwrite($file, "<b>Payment</b>". $payment."<hr>");
fclose($file);}



// Connect to the database
//$conn = mysqli_connect("localhost", "root", "615@Nkululeko", "sbali_driving_academy");

// Check connection
/*echo "testing";
if (!$conn) {
  echo "testing2";
  die("Connection failed: " . mysqli_connect_error());

}*/

// Validate the form data
/*if (!validateForm()) {
 if (true) {
    header("Location: index.php");
    exit;
}*/

//Insert the booking data into the database
/*$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$hours = $_POST["hours"];
$payment = $_POST["payment"];*/

/*echo $name;
echo $email;
echo $date;
echo $time;
echo $hours; 
echo $payment;*/


//$query = "INSERT INTO bookings (name, email, date, time, hours, payment) VALUES ('$name', '$email', '$date', '$time', '$hours', '$payment')";


/*if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}*/

// Send a confirmation email to the user
/*$to = $email;
$subject = "Booking Confirmation";
$message = "Thank you for booking with us. Your booking details are as follows:\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Date: $date\n";
$message .= "Time: $time\n";
$message .= "Hours: $hours\n";
$message .= "Payment: " . ($payment ? "Checked" : "Unchecked");*/

//mail($to, $subject, $message);

// Handle payment processing (if applicable)
//if ($payment) {
    // Process the payment using your preferred payment gateway
    // ...
//}

// Close the database connection
//mysqli_close($conn);

// Redirect the user to a index page
header("Location: index.php?booking=success");
exit;
?>
