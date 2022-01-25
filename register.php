<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Welcome</h2>
            </div>
           
            <form action="services.php" method="post">

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" class="form-control" required>
                </div>                        

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="adress" name="adress" class="form-control"required>
                </div>

                <div class="form-group">
                    <label>Suburb</label>
                    <input type="text" name="suburb" class="form-control"required>
                </div>

                <div class="form-group">
                    <label>CellPhone No</label>
                    <input type="number" name="cellNo" class="form-control"required>
                </div>

                Password: <input type="password" placeholder="Password" name="passwd"  required>
        <input type="password" placeholder="Confirm Password" name="confirm_passwd" required>
        <script>
            var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
        </script>

                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>

</body>
</html>