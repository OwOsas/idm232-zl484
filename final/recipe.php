<?php
    include_once "./injection/html_inj.php";
    $page_title = "Recipe";
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
        $title = "Test Title";
        $bg_img = "";
        $sql = "SELECT * FROM recipes";
        if(isset($_GET["search"]) && isset($_GET["region"]) && isset($_GET["type"])){
            if($_GET["search"] != "All" || $_GET["region"] != "All" || $_GET["type"] != "All"){
                $sql .= " WHERE";
            }
            $hasTerm = false;

            if(isset($_GET["search"]) && !($_GET["search"] == "All")){
                $keyword = $_GET["search"];
                $sql .= " r_title LIKE '%" . $keyword . "%'";
                $sql .= " OR r_imgName LIKE '%" . $keyword . "%'";
                $sql .= " OR r_difficulty LIKE '%" . $keyword . "%'";
                $sql .= " OR r_region LIKE '%" . $keyword . "%'";
                $sql .= " OR r_prepTime LIKE '%" . $keyword . "%'";
                $sql .= " OR r_cookTime LIKE '%" . $keyword . "%'";
                $sql .= " OR r_origin LIKE '%" . $keyword . "%'";
                $sql .= " OR r_ingredients LIKE '%" . $keyword . "%'";
                $sql .= " OR r_steps LIKE '%" . $keyword . "%'";
                $hasTerm = true;
            }
        
            if(isset($_GET["region"]) && !($_GET["region"] == "All")){
                if($hasTerm){
                    $sql .= "AND";
                }
                $sql .= " r_region='" . $_GET["region"] . "'";
                $hasTerm = true;
            }

        
            if(isset($_GET["type"]) && !($_GET["type"] == "All")){
                if($hasTerm){
                    $sql .= "AND";
                }
                $sql .= " r_type='" . $_GET["type"] . "'";
                $hasTerm = true;
            }
        }
        $sql .= ";";

        // echo $sql;

        $result = mysqli_query($conn,$sql);

        if($result != false){
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck>0){
                while ($row = mysqli_fetch_assoc($result)) {
                    $time = $row["r_prepTime"] + $row["r_cookTime"];
                    card_gen($row["r_ID"], $row["r_title"], $row['r_imgName'], $row["r_type"], $row['r_origin'], $time, $row['r_difficulty']);
                }
            }
        }

        

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