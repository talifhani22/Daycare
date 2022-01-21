<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h>Drop-Off</h>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad temporibus ex labore id earum maiores deleniti, consequatu
         perspiciatis ut cumque provident! Dolore atque, voluptatem odit nobis dignissimos quidem dolorum? </p>

         <form method="get" action="time.php">
         <input type = "submit" value ="Reserve" />
          </form>
   
</body>
</html>
<?php

include 'conn.php';

if(!isset($_POST['save']))
{    
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
 
     $query = "INSERT INTO d_user (fname,lname,email)
     VALUES ('$fname','$lname','$email')";
 
     if (mysqli_query($dbCon, $query)) {
        echo "";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
}
?>
