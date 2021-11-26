<?php
include_once '../include/dbh_inc.php';
include_once '../include/functions_inc.php';

$sql = "INSERT INTO recipe (r_title, r_imgName, r_region, r_type, r_prepTime, r_cookTime, r_origin, r_ingredients,r_steps) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt, $sql);