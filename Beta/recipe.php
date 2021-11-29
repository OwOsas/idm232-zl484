<?php
    include_once "./injection/html_inj.php";
    $page_title = "Recipe";
    $errormsg = "";
    session_start();
    if (!isset($_SESSION['u_username'])) {
        header("location: ./index.php");
    }
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
    <link rel="stylesheet" href="./css/recipe.css">
    
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    include_once './include/dbh_inc.php'
    
    // echo var_dump($_SESSION);
    ?>

    <div id="card_container">
        <?php
        include_once './injection/card.php';

        if($_SESSION["u_isAdmin"]){
            include_once './injection/create_button.php';
        }
        ?>
        
    </div>

    <?php
        include './injection/footer.php';
    ?>
    <script src="./js/recipe.js"></script>
    
    
</body>
</html>