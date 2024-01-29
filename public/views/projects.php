<?php
if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}
$userName = $_SESSION['user']['name'];
$userEmail = $_SESSION['user']['email'];
$userRole = $_SESSION['user']['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Roboto:ital@0;1&family=Rubik+80s+Fade&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="public/css/main_style.css">


    <title>Main Page</title>
</head>
<body>

<header id="header">
    <div id="sidebar">
        <button id="menu-button">
            <div id="menu-icon">&#9776;</div>
            <div id="close-icon">&times;</div>
        </button>
        <div id="sidebar-header">
            <h2>Culinary Horizons</h2>
        </div>
        <a class="upload-a" href="/logout">Log out</a>
        <a class="upload-a" href="/projects">Main Page</a>
        <a class="upload-a" href="/menu">Country search</a>
        <a class="upload-a" href="/addProjects">Upload Recipe</a>
        <a class="upload-a" href="/zurek">Poland</a>
        <a class="upload-a" href="#">Italy</a>
        <a class="upload-a" href="#">China</a>

    </div>

    <div id="logo">
        <img src="#" alt="">
    </div>
    <h1>Culinary Horizon</h1>

</header>
<main>

    <div class="search-center">
        <form class="search1" action="/action_page.php">
            <input type="text" placeholder=" Find a country" name="search">
            <button   type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <h2>Recommended Category</h2>
    <div class="advantages-box">
        <div class="advantages-one-third">
            <div class="column-advantage best-ingredients">
                <div class="bottom-right">
                </div>
            </div>
        </div>
        <div class="advantages-one-third">
            <div class="column-advantage original-recipe">
                <div class="bottom-right">
                </div>
            </div>
        </div>
        <div class="advantages-one-third">
            <div class="column-advantage fast-delivery">
                <div class="bottom-right">
                </div>
            </div>
        </div>
    </div>
    <h2>Popular Dishes</h2>
    <div class="popular-menu">
        <div class="menu-one-forth">
            <img class="recipe-image" src="https://i0.wp.com/zjemto.pl/wp-content/uploads/2014/04/DSC_1699.jpg?fit=585%2C530&ssl=1" alt="">
            <p>Zurek wielkanocny</p>
            <article>
                <p>Poland</p>
                <section class="button-cook">
                    <a href="#" class="button comment-button">Comment</a>
                    <a href="#" class="button cook-button">Cook!</a>
                </section>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, amet.</p>
            </article>
        </div>
        <div class="menu-one-forth">
            <img src="https://cdn.pixabay.com/photo/2019/11/23/15/26/ramen-4647408_1280.jpg" alt="">
            <p>Ramen</p>
            <article>
                <p>Japan</p>
                <section class="button-cook">
                    <a href="#" class="button comment-button">Comment</a>
                    <a href="#" class="button cook-button">Cook!</a>
                </section>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, amet.</p>
            </article>
        </div>
        <div class="menu-one-forth">
            <img src="https://cdn.pixabay.com/photo/2017/06/21/22/44/paella-2428945_1280.jpg" alt="">
            <p></p>Paella</p>
            <article>
                <p>Italy</p>
                <section class="button-cook">
                    <a href="#" class="button comment-button">Comment</a>
                    <a href="#" class="button cook-button">Cook!</a>
                </section>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, amet.</p>
            </article>
        </div>
        <div class="menu-one-forth">
            <img src="https://cdn.pixabay.com/photo/2019/02/20/01/12/feijoada-4008190_1280.jpg" alt="">
            <p>Brazil

            </p>
            <article>
                <p>Feijoada</p>
                <section class="button-cook">
                    <a href="#" class="button comment-button">Comment</a>
                    <a href="#" class="button cook-button">Cook!</a>

                </section>

            </article>
        </div>
    </div>
</main>
</body>

<script src="public/js/script_sidebar.js"></script>
</html>

