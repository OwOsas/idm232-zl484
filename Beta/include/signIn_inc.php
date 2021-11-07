<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $userInfo = array( $username_email, $pwd);

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        if(inputIsEmpty($userInfo)){
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        elseif(!usernameExists($conn, $username)){
            header("location: ../index.php?error=usernameDoesNotExists");
            exit();
        }

        else{
            
        }




    }
    else{
        header("location: ../index.php");
    }