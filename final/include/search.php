<?php
    if(isset($_POST["submit"])){
        $search = $_POST["search_input"];
        $region = $_POST["sort_region_dropdown"];
        $type = $_POST["sort_type_dropdown"];

        if(!$search){
            $search = "All";
        }

        header("location: ../recipe.php?search=" . $search . "&region=" . $region . "&type=" . $type);
        exit();
    }