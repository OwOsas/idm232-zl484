<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $userInfo = array( $username, $pwd);

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        if(inputIsEmpty($userInfo)){
            echo "empt";
            header("location: ../index.php?error=SI_emptyInput");
            exit();
        }

        elseif(!usernameExists($conn, $username)){
            echo "uEx";
            header("location: ../index.php?error=SI_usernameDoesNotExists");
            exit();
        }

        elseif(pwdIsCorrect($conn, $username, $pwd)){
            login($conn, $username);
            header("location: ../recipe.php");
            exit();
        }
        else{
            echo "pwd";
            header("location: ../index.php?error=SI_wrongPwd");
            exit();
        }
    }
    else{
        echo "exit";
        header("location: ../index.php");
        exit();
    }