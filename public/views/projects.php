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



    <style>
        #logo img {
            margin: 20px;
            width: 60px;
        }

        .menu {
            flex: 0 0 60%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .menu ul li {
            display: inline-block;
            padding-right: 20px;
        }

        .menu ul li a {
            color: rgb(146, 29, 29);
            font-size: 1.4rem;
        }

        .menu ul li a:hover {
            color: #FFD77F;
        }



        .slider-half-item .button {
            text-transform: uppercase;
            padding: 8px;
            text-decoration: none;
            margin: 2px;
            font-size: 0.7rem;
        }




        .advantages-box {
            margin-top: 10px;
            background-color: transparent;
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .advantages-box div {
            flex: 1 0 30%;
        }

        .column-advantage {

            height: 160px;

            background-size: cover;
            background-position: center center;
        }

        .best-ingredients {
            background-image: url("https://cdn.pixabay.com/photo/2017/05/07/08/56/pancakes-2291908_1280.jpg");
            box-shadow: 0px 0px 10px #000;


        }

        .original-recipe {
            background-image: url("https://cdn.pixabay.com/photo/2017/10/09/19/29/eat-2834549_1280.jpg");
            box-shadow: 0px 0px 10px #000;
        }

        .fast-delivery {
            background-image: url("https://cdn.pixabay.com/photo/2020/10/01/22/39/gourmet-5619887_1280.jpg");
            box-shadow: 0px 0px 10px #000;
        }

        .bottom-right {
            position: absolute;
            right: 10px;
            bottom: 10px;
        }
        h2 {
            font-family: cursive, Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.4rem;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px;
            color: #333;
        }
        .popular-menu {
            margin-top: 15px;
            /* background-color: #FF8473; */
            background-color: #CEA0AA;
            display: flex;
            justify-content: space-between;
            font-family: cursive, Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            gap: 20px;

        }
        .my-recipes {
            margin-top: 15px;
            /* background-color: #FF8473; */
            background-color: #CEA0AA;
            display: flex;
            justify-content: space-between;
            font-family: cursive, Verdana, Geneva, Tahoma, sans-serif;
            padding: 20px;
            gap: 20px;
        }
        .my-recipes img{
            width: 100%;

        }

        .menu-one-forth {
            flex-basis: 25%;
            text-align: center;
            font-size: 0.9rem;
        }

        .menu-one-forth img {
            width: 100%;
        }

        .page-footer {
            width: 100%;
            background-color: black;
            font-family: Cookie, cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .button-cook{
            border-radius: 5px;
        }
        .cook-button {
            border-radius: 5px;
            background: #F8BEB6;
        }
        .comment-button {
            border-radius: 10%;
            background: #F8BEB6;
        }
        .search1 input {
            width: 80%;
            height: 25px;
            border-radius: 30px;
            border: none;

        }
        button {
            border: none;
            height: 25px;
            border-radius: 50%;
        }

        .search-center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 10px;
            width: 100%;
            height: 100%;
        }
        .search1 {
            width: 80%;
            height: 25px;
            border-radius: 30px;
        }

        .breakfast, .salads, .snacks{
            color: #070000;
            /* background-color: #deb9b5; */
            justify-content: center;
        }
        :root {
            box-sizing: border-box;
            /*color: white;*/
            color: #FFF9D2;

        }

        ::before, ::after {
            box-sizing: inherit;
        }

        body {
            /*background: linear-gradient(to right, #FF8473, #FFF9D2);
            */
            /* background: #FF8473; */
            background: #FEE1DD;
            overflow: auto;
            padding: 0;
        }
        h1 {
            color: #262626;
            font-size: larger;
            align-content: center;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
        }

        #header {
            background-color: #CEA0AA;
            padding: 5px;
            font-family: "Cookie", cursive;
            display: flex;
            justify-content: space-between;
        }

        #logo img {
            margin: 20px;
            width: 60px;
        }
        #sidebar {
            width: 250px;
            height: 100vh;
            background-color: #555;
            color: #fff;
            position: fixed;
            left: -250px;
            top: 0;
            transition: left 0.3s ease;
            padding-top: 60px;

        }
        #sidebar a {
            padding: 10px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #sidebar a:hover {
            background-color: #777;
        }
        a.active,a:hover{
            border-left: 5px solid #b93632;
            color: #b93632;
        }

        #menu-icon {
            position: fixed;
            left: 10px;
            top: 10px;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            border: 1px solid #262626;
            margin: 15px 30px;
            font-size: 29px;
            background: #262626;
            height: 45px;
            width: 45px;
            text-align: center;
            line-height: 45px;
            transition: all .5s ease;
        }



    </style>
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
        <a href="/projects">Main Page</a>
        <a href="/menu">Country search</a>
        <a href="/addProjects">Upload Recipe</a>
        <a href="/zurek">Poland</a>
        <a href="#">Italy</a>
        <a href="#">China</a>
    </div>

    <div id="logo">
        <img src="#" alt="">
    </div>
    <h1>Culinary Horizon</h1>

</header>
<main>
    <!-- <div class="slider-box"> -->
    <!-- <div class="slider-half-item"> -->
    <!-- <article> -->
    <!-- Recommended dishes
    <hr>
    <section class="button-section">
        <a href="#" class="button order-button">Zamów z dostawą</a>
        <a href="#" class="button book-button">Rezerwacja</a>
    </section> -->
    <div class="search-center">
        <form class="search1" action="/action_page.php">
            <input type="text" placeholder=" Find a country" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- </article> -->
    <!-- </div> -->
    <!-- <div class="slider-half-item pizza-img">
        &nbsp;
    </div> -->
    <!-- </div> -->
    <h2>Recommended Category</h2>
    <div class="advantages-box">
        <div class="advantages-one-third">
            <div class="column-advantage best-ingredients">
                <div class="bottom-right">
                    <a href="#" class="breakfast"> Breakfast </a>
                </div>
            </div>
        </div>
        <div class="advantages-one-third">
            <div class="column-advantage original-recipe">
                <div class="bottom-right">
                    <a href="#" class="salads"> Salads </a>
                </div>
            </div>
        </div>
        <div class="advantages-one-third">
            <div class="column-advantage fast-delivery">
                <div class="bottom-right">

                    <a href="#" class="snacks"> Appetizers<br>&<br>Snacks </a>
                </div>
            </div>
        </div>
    </div>
    <h2>Popular Dishes</h2>
    <div class="popular-menu">
        <div class="menu-one-forth">
            <img src="https://i0.wp.com/zjemto.pl/wp-content/uploads/2014/04/DSC_1699.jpg?fit=585%2C530&ssl=1" alt="">
            Zurek wielkanocny
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
            Ramen
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
            Paella
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
                &#127463
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
<footer class="page-footer menu">
    <ul>
        <li><a href="#">Regulamin</a></li>
        <li><a href="#">O nas</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Kontakt</a></li>
    </ul>
</footer>
</body>
<script>
    document.getElementById('menu-button').addEventListener('click', function () {
        var sidebar = document.getElementById('sidebar');
        var menuIcon = document.getElementById('menu-icon');
        var closeIcon = document.getElementById('close-icon');

        if (sidebar.style.left === "-250px") {
            sidebar.style.left = "0";
            menuIcon.style.display = "none";
            closeIcon.style.display = "block";
        } else {
            sidebar.style.left = "-250px";
            menuIcon.style.display = "block";
            closeIcon.style.display = "none";
        }
    });
</script>
</html>

