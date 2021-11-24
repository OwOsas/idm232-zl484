<?php
$title = "Test Title";
$bg_img = "";
$sql = "SELECT * FROM recipe;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    while ($row = mysqli_fetch_assoc($result)) {
        // card_gen($row["r_title"], $row["r"]);
    }
}

function card_gen($title, $special, $time, $difficulty){
    // echo "<a href=\"\" class=\"card\" style=\"background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);\">";
    // echo "<h1>" . $title . "</h1>";
    // echo "</a>";

    echo "<link rel=\"stylesheet\" href=\"./injection/css/card.css\">";
    echo "<a href=\"\" class=\"card\">";
    echo "<div class=\"thumbnail_img\" style=\"background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);\"></div>";
    echo "<div class=\"description_container\">";
    echo "<div class=\"tag\">Nord</div>";
    echo "<div class=\"content_box\">";
    echo "<h1>" . $title . "</h1>"; //Title Go Here
    echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum,  delectus...</p>";
    echo "<div class=\"desc_bot\">";
    echo "<div class=\"time\">";
    echo "<img src=\"./img/timer_icon.svg\" alt=\"Cooking Time\">";
    echo "<p>1hr</p>";
    echo "</div>";
    echo "<div class=\"difficulty\">";
    echo "<p><b>Difficulty:</b> 3</p>";
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