<?php
$heading = "login";

        $nameError          = "";
        $passwordError      = "";
            if(isset($_POST['submit'])) {
                echo "Your User Name is:" . $_POST['username'];
                echo "</br>";
                echo "Your Password is:" . $_POST['password'];

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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <div class="container-fluid" >
    <form action="user_form.php" method="POST" class="mx-auto">
        <div><span><h1 class="text-center"><?=$heading;?></h1> </span></div>
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" 
                   placeholder="Enter Your User Name" name="username" size="20" required>
                   <div><span class="text-danger"><?php echo $nameError?></span></div>
            
        </div>
        <div class="mb-3 mt-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Enter Your Password" size="20" required>
                   <div><span class="text-danger"><?php echo $passwordError?></span></div>

        </div>
        
        <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
    </form>

    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
</body>
</html>


<!-- <div class="container-fluid"> 
<form class="mx-auto">
<h4 class="text-center"></h4
<div class="mb-3 mt-5">
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label> <input type="password" class="form-control" id="exampleInputPassword1">
<div id="emailHelp" class="form-text">Forget password?</div>
</div>
<button type="submit" class="btn btn-primary">Login</button>
</form>
</div> -->
