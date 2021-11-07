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
    if (preg_match("[a-zA-Z0-9]", $username)){
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

function pwdIsValid($pwd){

}

function createUser($conn, $name, $username, $email, $pwd){
    $sql = "INSERT INTO userinfo (userInfo_name, userInfo_Username, userInfo_email, userInfo_pwb) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

