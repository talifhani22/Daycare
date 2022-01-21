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
           
            <form action="db.php" method="post">

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

                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>

</body>
</html>