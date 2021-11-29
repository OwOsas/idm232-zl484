<?php
    include_once "./injection/html_inj.php";
    include_once './include/dbh_inc.php';
    include_once './include/functions_inc.php';

    session_start();
    if (!isset($_SESSION['u_username'])) {
        header("location: ./index.php");
    }
    
    $sql = "SELECT * FROM recipe;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['r_ID'] == $_GET["id"]){
                $title = $row['r_title'];
                $imgName = $row['r_imgName'];
                $difficulty = $row['r_difficulty'];
                $region = $row['r_region'];
                $type = $row['r_type'];
                $prepTime = $row['r_prepTime'];
                $cookTime = $row['r_cookTime'];

                $origin = $row['r_origin'];
                $ingredients = $row['r_ingredients'];
                $steps = $row['r_steps'];

                $time = $prepTime + $cookTime;
                $hr = (int)($time / 60);
                $mins = $time % 60;
                $page_title = $title;
            }
        }
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
    <link rel="stylesheet" href="./css/detail.css">
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    ?>

    <div class="container">
        <div id="showcase">
            <div id="thumbnail"></div>
            <style>
                #thumbnail{
                    <?php
                    echo "background-image: url(\"./img/recipe_img/" .  $imgName . "\");";
                ?>
                }

            </style>

            <div class="description_container">
                <div class="tag"><?php echo $type; ?></div>
                <div class="content_box">
                <h1 class="title">
                    <?php
                    echo $title;
                    ?>
                </h1>
                    <p><?php echo $origin; ?></p>
                    <div class="desc_bot">
                        <div class="time">
                            <img src="./img/timer_icon.svg" alt="Cooking    Time">
                            <p><?php 
                                if (!($hr == 0)){
                                    echo $hr . "hr ";
                                }
                                echo $mins . "mins</p>";
                                ?></p>
                        </div>
                        <div class="difficulty">
                            <p><b>Difficulty: </b><?php echo $difficulty;   ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2>Ingredients: </h2>
        <u>
        <?php
        $ingredient_list = explode("||", $ingredients);
        for ($i=0; $i < count($ingredient_list); $i++){
            echo "<li>";
            echo $ingredient_list[$i];
            echo "</li>";
        }
        ?>
        </u>

        <p><b>Preparation Time: </b><?php 
        if (!((int)($prepTime / 60) == 0)){
            echo (int)($prepTime / 60) . "hr ";
        }
        echo (int)($prepTime % 60) . "mins</p>";
        ?></p> 
        <p><b>Cooking Time: </b><?php
        if (!((int)($cookTime / 60) == 0)){
            echo (int)($cookTime / 60) . "hr ";
        }
        echo (int)($cookTime % 60) . "mins</p>";
        ?></p> 

        <ul>
            <?php
                $step_list = explode("||", $steps);
                for ($i=0; $i < count($step_list); $i++){
                    echo "<li>";
                    echo $step_list[$i];
                    echo "</li><br>";
                }
            ?>
        </ul>


    </div>


    



</body>
</html>