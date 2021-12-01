<?php

include_once './include/dbh_inc.php';
include_once './include/functions_inc.php';

$username = "owosas";

$sql = "INSERT INTO recipe (r_title, r_imgName, r_difficulty, r_region, r_type, r_prepTime, r_cookTime, r_origin, r_ingredients,r_steps) VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
echo "insert result";
if (mysqli_stmt_prepare($stmt, $sql)){
    echo "prepared";
}
else{
    echo "not preped";
}