<?php
include_once './include/dbh_inc.php';

session_start();
if(($_SESSION["u_isAdmin"] == true)){
    
    $sql = "DELETE FROM recipes WHERE r_ID =" . $_GET["id"];

    if (mysqli_query($conn, $sql)) {
      echo "Deleted successfully";
      header("location: ./recipe.php?return=success");
    } else {
      echo "Error: " . mysqli_error($conn);
    }
}

else{
    header("location: ./recipe.php?error=noPermission");
}
