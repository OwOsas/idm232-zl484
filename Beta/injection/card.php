<?php
$title = "Test Title";
$bg_img = "";
$sql = "SELECT * FROM recipe;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    while ($row = mysqli_fetch_assoc($result)) {
        $time = $row["r_prepTime"] + $row["r_cookTime"];
        card_gen($row["r_ID"], $row["r_title"], $row['r_imgName'], $row["r_type"], $row['r_origin'], $time, $row['r_difficulty']);
    }
}

function card_gen($ID, $title, $imgName, $type, $originOg, $time, $difficulty){
    // echo "<a href=\"\" class=\"card\" style=\"background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);\">";
    // echo "<h1>" . $title . "</h1>";
    // echo "</a>";
    $hr = (int)($time / 60);
    $mins = $time % 60;

    $originExplode = explode(" ", $originOg);

    $origin = "";
    for($i = 0; $i < 10; $i++){
        $origin = $origin . " " . $originExplode[$i];
    }
    $origin = $origin . "...";

    echo "<a href=\"./detail_recipe.php?id=". $ID ."\" class=\"card\">";
    echo "<div class=\"thumbnail_img\" style=\"background-image: url(./img/recipe_img/" . $imgName . ");\"></div>";
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
}

?>

<link rel="stylesheet" href="./injection/css/card.css">
<!-- <a href="" class="card" >
    <div class="thumbnail_img" style="background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);"></div>
    <div class="description_container">
        <div class="tag">Nord</div>
        <div class="content_box">
            <h1>Generate Title</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum,  delectus...</p>
            <div class="desc_bot">
                <div class="time">
                    <img src="./img/timer_icon.svg" alt="Cooking Time">
                    <p>1hr</p>
                </div>
                <div class="difficulty">
                    <p><b>Difficulty:</b> 3</p>
                </div>
            </div>
        </div>
    </div>
</a> -->