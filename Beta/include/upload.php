<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    echo var_dump($file);
    $fileName = $file['name'];
    $fileTmpLoc = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName); //Get file extension, lower case
    $fileExt = strtolower(end($fileExt));
    $allowed_file_type = ["png", "jpg", "jpeg"]; //Allowed file type
    $allowed_file_size = 10240000;
    // echo "<br>" . $fileSize . gettype($fileSize) . "<br>" . $allowed_file_size . gettype($allowed_file_size);

    if(!($fileError === 0)){
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
        header('Location: ../recipe.php?upload_success');
    }

}