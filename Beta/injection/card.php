<?php
$title = "Test Title";
$bg_img = "";
$sql = "SELECT * FROM recipe;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck>0){
    while ($row = mysqli_fetch_assoc($result)) {
        card_gen($row["r_title"]);
    }
}

function card_gen($title){
    echo "<a href=\"\" class=\"card\" style=\"background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);\">";
    echo "<h1>" . $title . "</h1>";
    echo "</a>";
}

?>

<link rel="stylesheet" href="./injection/css/card.css">

<!-- <a href="" class="card" style="background-image: url(./img/recipe_img/ESOR_KwamaEggQuich_img.jpg);">
    <h1><?php echo $title;?></h1>
</a> -->
