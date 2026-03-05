<?php

    if(isset($_POST['submit'])){
        $temp = 0;
        
        // use empty method
        if(empty($_POST['name'])){
            echo "name field is required!! <br><br>";
            $temp = 1;
        }

        // using is_numeric() method
        if(!is_numeric($_POST['number'])){
            echo "Please enter valid number!! <br><br>";
            $temp = 1;
        }

        // using preg_match
        $pattern = '/^[_a-zA-z0-9-]+@[a-zA-z].[a-z]{2,4}/';
        if(!preg_match($pattern,$_POST['email'])){  // or filter_vars($_POST['email'],FILTER_VALIDATE_EMAIL) 
            echo "Email doesn't exist!! <br><br>";
            $temp = 1;
        }

        if($temp == 0){
            echo "Registered successfully";
        }
    }