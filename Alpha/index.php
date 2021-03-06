<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | The Elder Scroll Cookbook</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/gernal.css">
    <link rel="stylesheet" href="css/bg.css">
</head>
<body>
    <div id="bg"></div>
    <div id="landing_container">
        <div id="header" class="hidden">
            <h1 id="header_title">
                The Elder Scroll Cookbook
            </h1>
            <div id="header_deco"></div>
        </div>

        <div id="title_container">
            <div id="title_deco"></div>
            <h1 id="title">The <br> Elder Scroll <br> Cookbook</h1>
        </div>

        <div id="login_form" class="hidden">
            <img src="img/bk_btn.svg" alt="Cancel Login" id="login_bk_btn">
            <form id="user_info">
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </form>
        </div>

        <a href="/recipe.html" id="login">
            <h2>Log In</h2>
        </a>

        <!-- <div id="login">
            <h2>Log In</h2>
        </div> -->
        
    </div>
    <script src="/js/index.js"></script>
</body>
</html>