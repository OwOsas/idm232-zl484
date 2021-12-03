<?php
    include_once "./injection/html_inj.php";
    include_once './include/dbh_inc.php';
    include_once './include/functions_inc.php';

    session_start();
    if (!isset($_SESSION['u_username'])) {
        header("location: ./index.php");
    }

    $page_title = "Edit: ";
    
    $sql = "SELECT * FROM recipes WHERE r_ID='" . $_GET["id"] . "';";
    $result = mysqli_query($conn,$sql);
    // echo $sql;
    // echo "<br>";
    // var_dump($result);
    // echo "<br>";
    // echo $result->num_rows;
    // echo "<br>";
    if($result && !($result->num_rows == 0)){
        $row = mysqli_fetch_assoc($result);
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
        $page_title .= $title;
        
    }
    else{
        header("location: ./recipe.php?error=recipeDoesNotExist");
    }

    function isSelected($input, $comparedTo){
        if ($input == $comparedTo){
            echo "selected";
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
    <link rel="stylesheet" href="./css/create.css">
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    ?>

    <h1 class = "page">Update Recipe</h1>

    <form id="create" action="./include/update.php" method="POST" enctype="multipart/form-data">
        <input type="number" id="ID" name="ID" style="display: none;" value="<?php echo $_GET["id"];?>">
        <!-- Name -->
        <label for="title">Dish Name: </label>
        <br>
        <input type="text" name="title" placeholder="Title..." value="<?php echo $title?>" >
        <br>
        <!-- Image -->
        <label for="file">Thumbnail Image: <p>(Leave this blank if you do not wish to change the thumbnail image)</p></label>
        <br>
        <input type="file" name="file">
        <br>

        <!-- Select Region -->
        <label for="sort_region_dropdown">Region where this dish came from:</label>
        <div class="dropdown_container" id="sort_region">
            <div class="dropdown_arrow"></div>
            <select name="sort_region_dropdown" id="sort_region_dropdown">
                <option value="All">--Select the region of the food--</option>
                <option <?php isSelected($region, "Nord");?> value="Nord">Nord</option>
                <option <?php isSelected($region, "Redguard");?> value="Redguard">Redguard</option>
                <option <?php isSelected($region, "Bosmer");?> value="Bosmer">Bosmer</option>
                <option <?php isSelected($region, "Khajiit");?> value="Khajiit">Khajiit</option>
                <option <?php isSelected($region, "Imperial");?> value="Imperial">Imperial</option>
                <option <?php isSelected($region, "Orsimer");?> value="Orsimer">Orsimer</option>
                <option <?php isSelected($region, "Altmer");?> value="Altmer">Altmer</option>
                <option <?php isSelected($region, "Breton");?> value="Breton">Breton</option>
                <option <?php isSelected($region, "Dunmer");?> value="Dunmer">Dumer</option>
                <option <?php isSelected($region, "Argonian");?> value="Argonian">Argonian</option>
            </select>
        </div>
        <!-- Select Type of Food -->
        <label for="sort_type_dropdown">Types of Food</label>
        <div class="dropdown_container" id="sort_type">
            <div class="dropdown_arrow"></div>
            <select name="sort_type_dropdown" id="sort_type_dropdown" >
                <option value="All">--Select a type of food--</option>
                <option <?php isSelected($type, "Basics") ?> value="Basics">Basics</option>
                <option <?php isSelected($type, "Sides") ?> value="Sides">Sides, Starters, & Snacks</option>
                <option <?php isSelected($type, "Baked") ?> value="Baked">Baked Goods</option>
                <option <?php isSelected($type, "SoupsNStews") ?> value="SoupsNStews">Soups & Stews</option>
                <option <?php isSelected($type, "Main_Courses") ?> value="Main_Courses">Main Courses</option>
                <option <?php isSelected($type, "Desserts") ?> value="Desserts">Desserts</option>
                <option <?php isSelected($type, "Drinks") ?> value="Drinks">Drinks</option>
            </select>
        </div>

        <!-- Prep Time -->
        <label for="prepTime">Preparation time:</label>
        <br>
        <input type="number" id="prepTimeHr" name="prepTimeHr" value="<?php echo (int)($prepTime / 60); ?>">
        <span>Hour(s)</span>
        <input type="number" id="prepTimeMin" name="prepTimeMin" value="<?php echo (int)($prepTime % 60); ?>">
        <span>Minute(s)</span>
        <br>
        <!-- Cook Time -->
        <label for="cookTime">Cooking time:</label>
        <br>
        <input type="number" id="cookTimeHr" name="cookTimeHr" value="<?php echo (int)($cookTime / 60); ?>">
        <span>Hour(s)</span>
        <input type="number" id="cookTimeMin" name="cookTimeMin" value="<?php echo (int)($cookTime % 60); ?>">
        <span>Minute(s)</span>
        <br>

        <!-- Difficulty -->
        <label for="difficulty">Difficulty:</label>
        <br>
        <input type="number" id="difficulty" name="difficulty" value="<?php echo $difficulty;?>">
        <br>

        <!-- Ingredients -->
        <label for="ingredients">Ingredients: <p>(Separate each item with two consecutive pipes "||")</p></label>
        <textarea name="ingredients" id="ingredients" rows="6" >
            <?php echo $ingredients; ?>
        </textarea>
        <br>

        <!--Origin-->
        <label for="origin">Origin of this dish: </label><br>
        <textarea name="origin" id="origin" rows="10" >
        <?php echo $origin; ?>
        </textarea>
        <br>

        <!-- Steps of Instructions -->
        <label for="steps">Instructions: <p>(Separate each step with two consecutive pipes "||")</p></label>
        <textarea name="steps" id="steps" rows="20" >
        <?php echo $steps; ?>
        </textarea>


        <button type="submit" name="submit">Update</button>
    </form>
    
    <?php 
    include_once "./injection/footer.php";
    ?>
</body>
</html>