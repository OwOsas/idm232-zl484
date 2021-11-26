<div>Upload</div>
<?php
    include_once '../include/dbh_inc.php';
    include_once '../include/functions_inc.php';

if(isset($_POST['submit'])){
    // $post = $_POST['submit'];
    // echo var_dump($post);
    $title = $_POST["title"];
    //echo $title;

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpLoc = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $region = $_POST['sort_region_dropdown'];
    $type = $_POST['dropdown_container'];
    //echo $region . $type;

    $prepHr = $_POST['prepTimeHr'];
    $prepMin = $_POST['prepTimeMin'];
    $cookHr = $_POST['cookTimeHr'];
    $cookMin = $_POST['cookTimeMin'];
    //echo $prepHr . $prepMin . $cookHr . $cookMin;

    $ingredient = htmlspecialchars($_POST['ingredients'],ENT_QUOTES);
    $origin = htmlspecialchars($_POST['origin'],ENT_QUOTES);
    $steps = htmlspecialchars($_POST['steps'],ENT_QUOTES);
    
    // echo $ingredient . $origin . $steps;

    $fileExt = explode('.', $fileName); //Get file extension, lower case
    $fileExt = strtolower(end($fileExt));
    $allowed_file_type = ["png", "jpg", "jpeg"]; //Allowed file type
    $allowed_file_size = 10240000;
    // echo "<br>" . $fileSize . gettype($fileSize) . "<br>" . $allowed_file_size . gettype($allowed_file_size);
    if(recipeNameExists($conn, $title)){
        header('Location: ../create.php?error=recipe Exists');
    }
    elseif(!($fileError === 0)){
        echo "An Error Has Occurred";
    }
    elseif(!(in_array($fileExt, $allowed_file_type))){
        echo "Wrong Type";
    }
    elseif(!($fileSize < $allowed_file_size)){
        echo "File Size Too Big";
    }

    else{
        $fileNewName = uniqid('', true) . "." . $fileExt;
        $fileDest = '../img/recipe_img/' . $fileNewName;
        move_uploaded_file($fileTmpLoc, $fileDest);
        //header('Location: ../recipe.php?upload_success');
        $prepHr = $prepHr * 60;
        $prepTime = $prepHr + $prepMin;
        $cookHr = $cookHr * 60;
        $cookTime = $cookHr + $cookMin;
        
        createRecipe($conn, $title, $fileName, $region, $type, $prepTime, $cookTime, $ingredients, $origin, $steps);
    }

}