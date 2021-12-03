<?php


function card_gen($ID, $title, $imgName, $type, $originOg, $time, $difficulty){
    // echo "<a href=\"\" class=\"card\" style=\"background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);\">";
    // echo "<h1>" . $title . "</h1>";
    // echo "</a>";
    $hr = (int)($time / 60);
    $mins = $time % 60;

    $originExplode = explode(" ", $originOg);

    $origin = "";
    if(count($originExplode)>10){
        for($i = 0; $i < 10; $i++){
            $origin = $origin . " " . $originExplode[$i];
        }
        $origin = $origin . "...";
    }
    else{
        for($i = 0; $i < count($originExplode); $i++){
            $origin = $origin . " " . $originExplode[$i];
        }
        $origin = $origin . "...";
    }


    echo "<div class='card'>";
    echo "<a href=\"./detail_recipe.php?id=". $ID ."\" class=\"a_card\">";
    echo "<div class='thumbnail_img' style='background-image: url(./img/recipe_img/" . $imgName . ");'>";
    echo "</div>";
    echo "<div class=\"description_container\">";
    echo "<div class=\"tag\">" . $type . "</div>";
    echo "<div class=\"content_box\">";
    echo "<div class=\"title\"><h1>" . $title . "</h1></div>"; //Title Go Here
    echo "<p>" . $origin . "</p>";
    echo "<div class=\"desc_bot\">";
    echo "<div class=\"time\">";
    echo "<img src=\"./img/timer_icon.svg\" alt=\"Cooking Time\">";
    echo "<p>";
    if (!($hr == 0)){
        echo $hr . "hr ";
    }
    echo $mins . "mins</p>";
    echo "</div>";
    echo "<div class=\"difficulty\">";
    echo "<p><b>Difficulty:</b>" . $difficulty . "</p>";
    echo "</div>";
    echo "</div>";  
    echo "</div>";
    echo "</div>";
    echo "</a>";
    if($_SESSION["u_isAdmin"] == true){
        echo "<a href='./edit.php?id=" . $ID . "' class='edit'>";
        echo "<img src='./img/edit_icon.svg' alt='Edit'>";
        echo "</a>";
        echo "<div class='delete_container'>";
        echo "<div class='delete_cover'><img src='./img/delete_icon.svg' alt='Edit'></div>";
        echo "<a href='./delete.php?id=" . $ID . "' class='delete'>";
        echo "Delete";
        echo "</a>";
        echo "</div>";
    }
    echo "</div>";
}

?>

<link rel="stylesheet" href="./injection/css/card.css">
<!-- <div class="card">
<a href="./detail_recipe.php?id=2" class="card">
    <div class="thumbnail_img" style="background-image: url(./img/recipe_img/61a124648af500.21021777.jpg);">
    </div>
    <div class="description_container">
        <div class="tag">
            Basics
        </div>
        <div class="content_box">
            <div class="title">
                <h1>Kwama Egg Quiche</h1>
            </div>
            <p> Originally only known in Vvardenfell, this recipe traveled with. Dunmer...</p>
            <div class="desc_bot">
                <div class="time">
                    <img src="./img/timer_icon.svg" alt="Cooking Time">
                    <p>1hr 30mins</p>
                </div>
                <div class="difficulty">
                    <p><b>Difficulty:</b>4</p>
                </div>
            </div>
        </div>
    </div>
</a>
<a href="./edit.php?id=2" class="edit">
    <img src="./img/edit_icon.svg" alt="Edit">
</a>
<a href="./delete.php?id=2" class="edit">
    <img src="../img/delete_icon.svg" alt="Edit">
</a>
</div> -->