<?php
    $nameError = "";
    $passwordError = "";
            if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
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