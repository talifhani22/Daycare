<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="appt">Choose a time and date for your drop-off:</label>

<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>
  <input type="date" id="day" name="day">
 
</form>

<small>Office hours are 9am to 6pm</small>
<br    /> 
  <strong>Attetion!</strong> If you don't get respond after 5 minutes, consider your request rejected.
  <button onclick="myFunction()">Submit</button>

<script>
function myFunction() {
  alert("Thank you for Making Booking with Us!,If you don't get respond after 5 minutes, consider your request rejected.");
}
</script>


 

</div>

</body>
</html>

<?php

include 'conn.php';

if(!isset($_POST['save']))
{    
     $booking_id = $_POST['booking_id'];
     $user_id = $_POST['user_id'];
     $care_type = $_POST['care_type'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $status = $_POST['status'];
     

     
      $insert = mysqli_query($dbCon, "INSERT INTO bookings (care_type,date,time,status)
      VALUES ('$care_type','$date','$time','$status');") or die(mysqli_error($dbCon));
      
  
      
     }