<?php
    include_once "./injection/html_inj.php";
    include_once "./include/error_check.php";

    session_start();
    if (isset($_SESSION['u_username'])) {
        header("location: ./recipe.php");
    }

    $page_title = "Welcome";
    if(!empty($_GET["error"])){
        $errormsg = error_msg();;
    }
    else{
        $errormsg = "";
    }

    $username = "";
    
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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/bg.css">
</head>
<body>
    <span id="error_checker" class="<?php echo error_check(); ?>"></span>
    <div id="bg"></div>
    <div class="welcome_container">
        <img id="return" src="./img/bk_btn.svg" class="hidden" alt="">

        <div id="title_container">
            <img class="title_deco" src="./img/title_deco.svg" alt="">
            <h1 class="title">The <br> Elder Scroll <br> Cookbook</h1>
        </div>

        <div id="signIn_n_register">
            <button id="login">Log In</button>
            <button id="register">Register</button>
        </div>

        <div id="sign_in_container" class="hidden">
            <h1>SIGN IN</h1>
            <img class="sign_in_deco" src="./img/header_deco.svg" alt="">
        </div>
        <div id="sign_in_form_container" class="hidden">
            <form action="./include/signIn_inc.php" method="post">
                <div class="entry_container">
                    <div class="entry">
                        <img class="logIn_img" src="./img/user_icon_login.svg" alt="">
                        <input type="text" name="username" placeholder="Username..." value="<?php echo $username; ?>">
                    </div>
                    <div class="entry">
                        <img class="logIn_img" src="./img/pwd_icon.svg" alt="">
                        <input type="password" name="pwd" placeholder="Password...">
                    </div>
                    <p id="errorMsg" 
                    <?php 
                    if (!empty($_GET["error"])){
                        echo "class = \"error_detect\"";
                        } 
                        ?>>
                        <?php 
                        echo $errormsg;
                        ?>
                    </p>
                </div>
                <button class="btn" type="submit" name="submit">Log In</button>
                
                
            </form>
        </div>

        
        <div id="sign_up_container" class="hidden">
            <h1>SIGN UP</h1>
            <img class="sign_in_deco" src="./img/header_deco.svg" alt="">
        </div>

        <div id="sign_up_form_container" class="hidden">
            <form action="./include/signUp_inc.php" method="post">
            <div class="entry_container">
                <div class="entry" id="fst_lst_name">
                    <input type="text" name="fst_name" placeholder="First Name..."> 
                    <input type="text" name="lst_name" placeholder="Last Name..."> 
                </div>
                <div class="entry">
                    <img class="logIn_img" src="./img/user_icon_login.svg" alt="">
                    <input type="text" name="username" placeholder="Username...">
                </div>
                <div class="entry">
                    <img class="logIn_img" src="./img/email_icon.svg" alt="">
                    <input type="text" name="email" placeholder="Email...">
                </div>

                <div class="entry">
                    <img class="logIn_img" src="./img/pwd_icon.svg" alt="">
                    <input type="password" name="pwd" placeholder="Password...">
                </div>
                <div class="entry">
                    <input type="password" name="re_pwd" placeholder="Repeat Password...">
                </div>
                <p id="errorMsg" 
                    <?php 
                    if (!empty($_GET["error"])){
                        echo "class = \"error_detect\"";
                        } 
                        ?>>
                        <?php 
                        echo $errormsg;
                        ?>
                    </p>
            </div>
                
            <button class="btn" type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
    


    <!-- <?php
        include './injection/footer.php'
    ?> -->
    <script src="./js/index.js"></script>
    
</body>
</html>