<?php

include_once './include/dbh_inc.php';
include_once './include/functions_inc.php';

$id = "owosas";


if (usernameExists($conn, $id)){
    echo ($id);
}