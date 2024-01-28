<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" type="text/css" href="/public/css/style_menu.css">

    <style>
        #menu-button {
            /* background-color: #4CAF50; */
            background-color: #E9C2C5;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #close-icon {
            display: none;
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
            /* background: #FFF9D2; */
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
            color: black;
            font-size: 1.4 rem;
        }

        .menu ul li a:hover {
            color: #ffd77f


        }
        .contact-info {
            flex: 0 0 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            color: black;
        }

        .example input {
            background: grey;
            opacity: 0.3;
        }
        .example ::placeholder {
            color: black;
            opacity: 1;

        }

        .search input {
            background: grey;
            opacity: 0.3;

        }
        .search ::placeholder {
            color: black;
            opacity: 1;

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
            border-radius: 100%;
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
            /* width: 70%;
            max-width: 400px;
            margin: auto; Center the form horizontally
         */

            width: 80%;
            height: 25px;
            border-radius: 30px;
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

        .category {
            display: flex;
            justify-content: center;
            background-color:none;
            flex-wrap: wrap;

        }
        .category-title {
            background: none;
            background-color: #CEA0AA;
            padding: 20px;
            border: 10px;
            border-radius: 10px;
            margin: 50px;
            font-family: "Cookie" cursive;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 250px;
            height: 250px;
        }

        .img-country img {
            width: 200px;
            height: 200px;
            border-radius: 100%;
            z-index: 1;
            margin-bottom: 10px;
        }

        .category-name {
            font-size: larger;
            font-weight: 300;
            width: max-content;
            /* z-index: 2; */
        }




    </style>
    <title>Country search</title>
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
        <a href="/logout">Logout</a>
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


<div class="my-recipes">
    <?php foreach ($projects as $project): ?>
        <div class="menu-one-forth">
            <img src="public/uploads/<?= $project->getImage() ?>">

            <h3><?= $project->getTitle() ?></h3>
            <p> &#127463</p>
            <article>
                <section class="button-cook">
                    <a href="#" class="button comment-button">Comment</a>
                    <a href="#" class="button cook-button">Cook!</a>
                </section>
                <p><?= $project->getDescription() ?></p>
            </article>
        </div>
    <?php endforeach; ?>
</div>



<!-- <script src="script_sidebar.js"></script> -->
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
</body>
</html>
<?php
