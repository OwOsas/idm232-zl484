<?php

$db_serverName = "localhost";
$db_username = "sylarlic_idm-232";
$db_pwd = "C7kBu2Z8KQqnNvn";
$db_name = "sylarlic_idm-232";

$conn = mysqli_connect($db_serverName, $db_username, $db_pwd, $db_name);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}