<?php
$heading = "Login Form Validation in PHP";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login form Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class = "col-sm-3"></div>
            <div class = "col-md-6 bg-dark">
            <div class="form-group text-white"><span><h1><?=$heading;?></h1> </span></div>
                <form action="form.php" method="POST"> 
                   <!-- form.php -->
                    <fieldset class="bg-light m-5" >
                    <div class="row mb-3">
                        <!-- <i class="fas fa-user"></i> -->
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your User Name" name="username" size="20" required><br>
                    </div>
                    
                    <div class="row mb-3">
                        <!-- <i class="fas fa-lock"></i> -->
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your password" name="password" size="50" required><br>
                    </div>
                    </fieldset> 

                    <fieldset class="center">
                        <input type="submit" value="Login" name= "submit">
                    </fieldset>
            </div>
            <div class = "col-sm-3" ></div>
                </div>
            </div>

</body>
</html>

