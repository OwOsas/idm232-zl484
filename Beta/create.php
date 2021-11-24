<?php
    include_once "./injection/html_inj.php";
    session_start();
    if (!isset($_SESSION['u_username'])) {
        header("location: ./index.php");
    }
    $page_title = "Create";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    page_title($page_title);
    ?>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/bg.css">
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    include_once './include/dbh_inc.php'
    
    // echo var_dump($_SESSION);
    ?>

    <form action="./include/upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>

    </form>
</body>
</html>