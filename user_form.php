<?php
$heading = "Form Validation in PHP";

        $nameError          = "";
        $passwordError      = "";
            if(isset($_POST['submit'])) {
                // echo "Your User Name is:" . $_POST['username'];
                // echo "</br>";
                // echo "Your Password is:" . $_POST['password'];

            $username = $_POST['username'];
            $password = $_POST['password'];

                        // echo $username;
                        // echo "</br>";
                        // echo $password;
                        
            if (empty($username)) {
                $nameError = "Name is Required";
            } else {
                $username = trim($username);
                $username = htmlspecialchars($username); 
                if(!preg_match("/^[a-zA-Z ]+$/", $username)) {
                    $nameError = "<br />name should contain only char and space";
        }
    }
            if (empty($password)) {
                $passwordError = "<br />Password is required";
            } else {
                if(strlen($password) <= 8) {
                    $passwordError = "<br />At least 8 digits";
            } elseif(!preg_match("#[0-9]+#", $password)) {
                $passwordError = "<br />At least one digits";
            }   elseif(!preg_match("#[a-z]+#", $password)) {  
                $passwordError = "<br />At least one small cha";
            }   elseif(!preg_match("#[A-Z]+#", $password)) {
                $passwordError = "<br />At least one upper case";
            } 
        }
    }
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
            <div class = "col-sm-3 bg-gray"></div>
            <div class = "col-md-6 bg-dark">
            <div class="form-group text-white"><span><h1 class="text-center"><?=$heading;?></h1> </span></div>
                <form class=" bg-success" action="user_form.php" method="POST"> 
                   <!-- form.php -->
                    <fieldset class="bg-light m-3" >
                    <div class="row mb-3">
                        <!-- <i class="fas fa-user"></i> -->
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your User Name" name="username" size="20" required><br>
                        <span style="color: red;" ><?php echo $nameError;?></span>
                    </div>
                    
                    <div class="row mb-3">
                        <!-- <i class="fas fa-lock"></i> -->
                        <label for="password" class="form-label">Password:</label>
                        <input type="text" class="form-control-lg" id="exampleFormControlInput1" placeholder="Enter Your password" name="password" size="50" required><br>
                        <span style="color: red;" ><?php echo $passwordError;?></span>

                    </div>
                    </fieldset> 

                    <fieldset class="center">
                        <input type="submit" value="Login" name= "submit">
                    </fieldset>
            </div>
            <div class = "col-sm-3 bg-gray" ></div>
                </div>
            </div>

</body>
</html>