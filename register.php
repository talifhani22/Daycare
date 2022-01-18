<?php


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style2.css"/>
    <title>Document</title>
</head>
<body>
<form>
<div class="container">
<h1>Register Here</h1>
<p>Please fill in the details to create an account with us.</p>
<h>Parent Details</h>
<hr>
<label for="name"><b>Enter Name</b></label>
<input type="text" placeholder="Enter Full Name" name="name" required>
<label for="surname"><b>Enter Surname</b></label>
<input type="text" placeholder="Enter Surname" name="surname" required>
<label for="phoneno"><b>Enter Contact Details</b></label>
<input type="text" placeholder="Enter Phone Number" name="phoneno">
<label for="pwd"><b>Create a Password</b></label>
<input type="password" placeholder="Enter Password" name="pwd">
<label for="confirm"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="confirm">
<hr>
<h>Child Details</h>
<hr>
<label for="name"><b>Enter Name</b></label>
<input type="text" placeholder="Enter Full Name" name="name" required>
<label for="surname"><b>Enter Surname</b></label>
<input type="text" placeholder="Enter Surname" name="surname" required>

<hr>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
<button type="submit" class="registerbtn"><strong>Register</strong></button>
</div>
<div class="container signin">
<p>Already have an account? <a href="home.php">Sign in</a>.</p>
</div>
</form>
</body>
</html>