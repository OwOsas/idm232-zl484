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

    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/bg.css">
    <link rel="stylesheet" href="./css/create.css">
</head>
<body>
    <?php
    include_once './injection/navbar.php';
    include_once './include/dbh_inc.php';
    include_once './include/functions_inc.php';
    
    // echo var_dump($_SESSION);
    ?>

    <h1 class = "page">Create A New Recipe</h1>

    <form id="create" action="./include/upload.php" method="POST" enctype="multipart/form-data">
        <!-- Name -->
        <label for="title">Dish Name: </label>
        <br>
        <input type="text" name="title" placeholder="Title..." >
        <br>
        <!-- Image -->
        <label for="file">Thumbnail Image: </label>
        <br>
        <input type="file" name="file" >
        <br>

        <!-- Select Region -->
        <label for="sort_region_dropdown">Region where this dish came from:</label>
        <div class="dropdown_container" id="sort_region">
            <div class="dropdown_arrow"></div>
            <select name="sort_region_dropdown" id="sort_region_dropdown" >
                <option value="All">--Select the region of the food--</option>
                <option value="Nord">Nord</option>
                <option value="Redguard">Redguard</option>
                <option value="Bosmer">Bosmer</option>
                <option value="Khajiit">Khajiit</option>
                <option value="Imperial">Imperial</option>
                <option value="Orsimer">Orsimer</option>
                <option value="Altmer">Altmer</option>
                <option value="Breton">Breton</option>
                <option value="Dunmer">Dumer</option>
                <option value="Argonian">Argonian</option>
            </select>
        </div>
        <!-- Select Type of Food -->
        <label for="sort_type_dropdown">Types of Food</label>
        <div class="dropdown_container" id="sort_type">
            <div class="dropdown_arrow"></div>
            <select name="sort_type_dropdown" id="sort_type_dropdown" >
                <option value="All">--Select a type of food--</option>
                <option value="Basics">Basics</option>
                <option value="Sides">Sides, Starters, & Snacks</option>
                <option value="Baked">Baked Goods</option>
                <option value="SoupsNStews">Soups & Stews</option>
                <option value="Main_Courses">Main Courses</option>
                <option value="Desserts">Desserts</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>

        <!-- Prep Time -->
        <label for="prepTime">Preparation time:</label>
        <br>
        <input type="number" id="prepTimeHr" name="prepTimeHr"d>
        <input type="number" id="prepTimeMin" name="prepTimeMin"d>
        <br>
        <!-- Cook Time -->
        <label for="cookTime">Cooking time:</label>
        <br>
        <input type="number" id="cookTimeHr" name="cookTimeHr" d>
        <input type="number" id="cookTimeMin" name="cookTimeMin" d>
        <br>

        <!-- Ingredients -->
        <label for="ingredients">Ingredients: <p>(Separate each item with two consecutive pipes "||")</p></label>
        <textarea name="ingredients" id="ingredients" rows="6" ></textarea>
        <br>

        <!--Origin-->
        <label for="origin">Origin of this dish: </label><br>
        <textarea name="origin" id="origin" rows="10" ></textarea>
        <br>

        <!-- Steps of Instructions -->
        <label for="steps">Instructions: <p>(Separate each step with two consecutive pipes "||")</p></label>
        <textarea name="steps" id="steps" rows="20" ></textarea>


        <button type="submit" name="submit">Upload</button>
    </form>
    
    <?php 
    include_once "./injection/footer.php";
    ?>
</body>
</html>