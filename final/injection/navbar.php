<link rel="stylesheet" href="./injection/css/navbar.css">
<div id="navbar">
    <div id="hamburger">     
        <div id="burger_ele" class=""></div>
    </div>

    <div class="logo">
        <a href="./index.php"><h1>The Elder Scroll Cookbook</h1></a>
        <img src="./img/header_deco.svg" class="header_deco" alt="">
    </div>
    <div id="filter">
        <img src="./img/filter.svg" alt="">
    </div>
    
</div>

<div id="slide_in">
    <div id="burger_menu">
        <!-- <a href="">
            <img src="./img/saved_recipe.svg" alt="">
            <span>Saved Recipe</span>
            <img src="./img/slider_arrow.svg" alt="" style="transform:rotate(180deg); height:1em; width:1em; margin:0;">
        </a> -->
        
        <div id="account_container">
            <div>
                <img src="./img/user_icon.svg" alt="">
                <span>Account</span>
            </div>
            <div id="user_info_container">
                <div>
                    <h3>
                        <?php
                        echo $_SESSION["u_username"];
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo $_SESSION["u_email"];
                        ?>
                    </p>
                </div>
                <!-- <a href="">Account Setting</a> -->
            </div>
        </div>
        <a id="log_out" class="btn" href="./include/logout.php">Log Out</a>
        <!-- <button id="log_out" class="btn" type="submit" name="submit"></button> -->
    </div>

    <!-- FILTER MENU -->
    <div id="filter_menu" class="">
        <h1>Filter</h1>
        <br>
        <form action="./include/search.php" method="post">
            <div id="search">
                <input type="text" name="search_input" id="search_input" placeholder="Search...">
                <button class="btn" type="submit" name="submit">
                    <!-- <img src="./img/search_icon.svg" alt=""> -->
                </button>
            </div>

            <label for="sort_region_dropdown">The Tastes of Tamriel</label>
            <div class="dropdown_container" id="sort_region">
                <div class="dropdown_arrow"></div>
                <select name="sort_region_dropdown" id="sort_region_dropdown">
                    <option value="All">All</option>
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

            <label for="sort_type_dropdown">Types of Food</label>
            <div class="dropdown_container" id="sort_type">
                <div class="dropdown_arrow"></div>
                <select name="sort_type_dropdown" id="sort_type_dropdown">
                    <option value="All">All</option>
                    <option value="Basics">Basics</option>
                    <option value="Sides">Sides, Starters, & Snacks</option>
                    <option value="Baked">Baked Goods</option>
                    <option value="SoupsNStews">Soups & Stews</option>
                    <option value="Main_Courses">Main Courses</option>
                    <option value="Desserts">Desserts</option>
                    <option value="Drinks">Drinks</option>
                </select>
            </div>
            <button id="apply_filter" class="btn" type="submit" name="submit">Apply</button>
        </form>
    </div>
</div>

<div class="nav_pad"></div>
<script src="./js/navbar.js"></script>
