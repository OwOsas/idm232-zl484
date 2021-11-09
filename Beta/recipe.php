<?php
    include_once "./injection/html_inj.php";
    $page_title = "Recipe";
    $errormsg = "";
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
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/bg.css">
    <link rel="stylesheet" href="./injection/css/navbar.css">
    
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    ?>


    <?php
        include './injection/footer.php';
    ?>
    <script src="./js/recipe.js"></script>
    <script src="./js/navbar.js"></script>
    
</body>
</html>