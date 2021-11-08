<?php

function inputIsEmpty($userInfo){
    foreach ($userInfo as $userData){
        if (empty($userData)){
            return true;
        }
        else {
            return false;
        }
    }
}

function usernameIsValid($username){
    if (preg_match("/[a-zA-Z0-9]_/", $username)){
        return true;
    }
    else{
        return false;
    }
}

function usernameExists($conn, $username){
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["u_username"] == $username){
                return true;
            }
        }
    }
    else{
        return false;
    }
    return false;
}

function emailIsValid($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

function pwdIsMatch($pwd, $re_pwd){
    if ($pwd == $re_pwd){
        return true;
    }
    else{
        return false;
    }
}

function pwdIsCorrect($conn, $username, $pwd){
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["u_username"] == $username){
                if($username == "owosas"){
                    if($pwd ==$row["u_pwd"]){
                        return true;
                    }
                }
                else{
                    if(password_verify($pwd, $row["u_pwd"])){
                        return true;
                    }
                }
                
            }
        }
    }
    else{
        return false;
    }
    return false;

}

function login($conn, $username){
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["u_username"] == $username){
                session_start();
                $_SESSION["uID"] = $row["uID"];
                $_SESSION["u_username"] = $row["u_username"];
            }
        }
    }
}



function createUser($conn, $fst_name, $lst_name, $username, $email, $pwd){
    $admin = false;
    $sql = "INSERT INTO users (u_firstName, u_lastName, u_username, u_email	, u_pwd, u_isAdmin) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssi", $fst_name, $lst_name, $username, $email, $hashedPwd, $admin);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
}


