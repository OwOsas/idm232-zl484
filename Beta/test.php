<?php

include_once './include/dbh_inc.php';
include_once './include/functions_inc.php';

$id = "owosas";


if (usernameExists($conn, $id)){
    echo ($id);
}

if (usernameIsValid("Test_username")){
    echo ("is valid");
}
else{echo("not valid");}

// if (pwdIsValid("test_pwd")){
//     echo ("pwd is valid");
// }
// else{echo("pwd not valid");}

// createUser($conn, "Test_fst_name","Test_lst_name", "Test_username", "testemail@gmail.com", "test_pwd");

// if (usernameExists($conn, "Test_username")){
//     echo ("Test_username");
// }