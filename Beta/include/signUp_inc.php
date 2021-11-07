<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $re_pwd = $_POST["re_pwd"];
        $userInfo = array($name, $username, $email, $pwd, $re_pwd);

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        if (inputIsEmpty($userInfo) == true){
            header("location: ../index.php?error=emptyInput");
            exit();
        }

        if (usernameIsValid($username) == false){
            header("location: ../index.php?error=invalidUsername");
            exit();
        }

        if (usernameExists($connDB, $username) == true){
            header("location: ../index.php?error=usernameExist");
            exit();
        }

        if (emailIsValid($email) == false){
            header("location: ../index.php?error=invalidEmail");
            exit();
        }

        if (pwdIsMatch($pwd, $re_pwd) == false){
            header("location: ../index.php?error=passwordDoNotMatch");
            exit();
        }

        if (pwdIsValid($pwd) == false){
            header("location: ../index.php?error=invalidPassword");
            exit();
        }

        createUser($connDB, $name, $username, $email, $pwd);
    }
    else{
        header("location: ../index.php");
    }