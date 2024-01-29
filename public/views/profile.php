<?php

if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}
$userName = $_SESSION['user']['name'];
$userSurname = $_SESSION['user']['surname'];
$userEmail = $_SESSION['user']['email'];
$userType = $_SESSION['user']['type'];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOMEPAGE</title>
        <link rel="stylesheet" type="text/css" href="public/css/style_page.css">
        <link rel="stylesheet" type="text/css" href="public/css/profile.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
        <script type="text/javascript" src="/public/js/script.js" defer></script>
    </head>
    <body>
    <div class="main_content">
        <div class="nav_bar">
            <img id="logoMoblie" src="public/img/mobileLogo.svg">
            <a href="homepage" class="menu_element">
                <img src="public/img/home.svg">
                <div>HOME</div>
            </a>
            <a href="categories" class="menu_element">
                <img src="public/img/category.svg">
                <div>CATEGORIES</div>
            </a>
            <a href="toread" class="menu_element">
                <img src="public/img/to_read2.svg">
                <div>TO-READ</div></a>
            <a href="profile_history" class="menu_element">
                <img src="public/img/me.svg">
                <div>ME</div>
            </a>
            <a href="logout" id="logoutButton" class="menu_element">
                <img src="public/img/logout.svg">
                <div class="logout">LOG OUT</div>
            </a>
        </div>

        <div class="right_side">
            <div class="search_bar">

            </div>

            <div class="content">
                <div class="content_profile_menu">
<!--                    <a href="profile_history">History</a>-->
<!--                    <a href="profile_account">Account</a>-->
                </div>
                <div class="content_profile_stuff">
                    <div class ="content_profile_stuff_account">
                        <div class="account_information">
                            <h1>Name: <?= $userName; ?></h1>
                            <h1>Surname: <?= $userSurname; ?></h1>
                            <h1>Email: <?= $userEmail; ?></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

<?php ?>