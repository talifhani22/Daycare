<?php 
session_start();
include "conn.php";
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style1.css"/>
    <title>Document</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
   
    <form action="login.php" method="post">
        <h2>Welcome to Dashboard, Login</h2>
        <label for="email">Enter Email</label>
        <input type="text" placeholder="Email" name="email">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="passwd">
        <input type="submit" class="btn btn-primary" name="submit" value="save">
</form>

</div>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    if(empty($email) || empty($passwd)){
        echo "
        <script>alert('Please fill the fields');</script>
        <script>window.open('login.php', '_self')</script>
    ";
    exit();
}
else
{
    
    $select_d_user = "SELECT *
                        FROM d_user
                        WHERE email = '$email'
                        AND passwd = '$passwd'";
    $run_d_user = mysqli_query($con, $select_d_user);
    $count_d_user = mysqli_num_rows($run_d_user);
    $row_d_user = mysqli_fetch_array($run_d_user);
    if($count_d_user==0)
        {
            echo "
            <script>alert('Your email or password is wrong!');</script>
            <script>window.history.back()</script>
            ";
            exit();
        }

        if($count_d_user==1)
        {

            $_SESSION['email'] = $row_d_user['email'];
            $_SESSION['passwd'] = $row_d_user['passwd'];
            
                
            echo "<script>window.open('services.php', '_self')</script>";
        }
    }
}
?>


