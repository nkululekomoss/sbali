<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
<body>

<form action="booking.php" method="post">
<label for="name">Name</label>
<input type="text" id="name" name="name" placeholder="Your Names"><br><br>
<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="Your E-Mail"><br><br>
<label for="date">Date</label>
<input type="date" id="date" name="date"><br><br>
<label for="time">Time</label>
<input type="time" id="time" name="time" placeholder="Hours"><br><br>
<label for="hours">Extra Lessons</label>
<input type="number" id="hours" name="hours"><br><br>
<label for="service">Service:</label>
<select id="service" name="service">
<option value="service">Package 1 - Learner's Licence + 5 Driving Lessons + Driver's Test</option>
<option value="service">Package 2 - Package 1 + 5 Extra Driving Lessons</option>
<option value="service">Code 14/EC Driving</option>
</select><br><br>
<label for="payment">Payment Option:</label>
<select id="payment" name="payment">
<option value="payment">Bank Deposit</option>
<option value="payment">Electronic Funds Transfer (EFT)</option>
<option value="payment">Cash Payment</option>
</select><br><br>
<div class="col-12">
<button class="btn btn-primary py-3 px-5" type="submit">Send Booking</button>
</div>
</form>

