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
     $adress = $_POST['adress'];
     $suburb = $_POST['suburb'];
     $cellNo = $_POST['cellNo'];
     $passwd = $_POST['passwd'];
     $confirm_passwd = $_POST['confirm_passwd'];

     
      $insert = mysqli_query($dbCon, "INSERT INTO d_user (fname,lname,email,adress,suburb,cellNo,passwd,confirm_passwd)
      VALUES ('$fname','$lname','$email','$adress','$suburb','$cellNo','$passwd','$confirm_passwd');") or die(mysqli_error($dbCon));
      
  
      
     }
     
 
    
     

?>
