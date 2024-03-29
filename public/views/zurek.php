<?php

if (!isset($_SESSION['user'])) {
    header("Location: login");
    exit();
}
$userName = $_SESSION['user']['name'];
//$userSurname = $_SESSION['user']['surname'];
$userEmail = $_SESSION['user']['email'];
//$userType = $_SESSION['user']['type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="public/css/main_style.css">

    <style>
        body {
            background: #FEE1DD;
            overflow: auto;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #header {
            background-color: #CEA0AA;
            padding: 5px;
            font-family: "Cookie", cursive;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

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

        h1 {
            color: #262626;
            font-size: larger;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 10px;
        }

        .recipe-section {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #cea0aaa1;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            margin-top: 0;
        }

        .recipe-details {
            margin-top: 10px;
            font-size: 16px;
        }

        img {
            margin-top: 15px;
            background-color: #CEA0AA;
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
        }

        .mv-create-ingredients {
            clear: left;
        }

        .mv-create-ingredients-title {
            font-size: 20px;
            text-align: center;
        }

        ul {
            padding: 0;
            list-style-type: none;
        }

        li {
            margin-bottom: 10px;
        }

        h4 {
            margin-top: 20px;
            margin-bottom: 10px;
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
        <a href="/logout">Log out</a>
        <a href="/projects">Main Page</a>
        <a href="/menu">Country search</a>
        <a href="/addProjects">Upload Recipe</a>
        <a href="/addProjects#">My Recipes</a>
        <a href="/zurek">Poland</a>
        <a href="#">Italy</a>
        <a href="#">China</a>

    </div>

    <div id="logo">
        <img src="#" alt="">
    </div>
    <h1>Culinary Horizon</h1>

</header>

<div class="recipe-section">
    <h2>Żurek wielkanocny</h2>
    <div class="recipe-details">
        <img src="https://i0.wp.com/zjemto.pl/wp-content/uploads/2014/04/DSC_1699.jpg?fit=585%2C530&ssl=1" alt="">
        <p><strong>Category:</strong> Polish</p>
        <p><strong>Ingredients:</strong> 1 kg white sausage
            <li>3-4 hard-boiled eggs</li>
            <li>2 onions</li>
            <li>3 cloves of garlic</li>
            <li>1 tablespoon butter</li>
            <li>2 tablespoons wheat flour</li>
            <li>2-3 tablespoons vinegar</li>
            <li>2 teaspoons salt</li>
            <li>1 teaspoon pepper</li>
            <li>1 teaspoon marjoram</li>
            <li>2 bay leaves</li>
            <li>A few grains of allspice</li>
            <li>3-4 slices of rye bread</li></p>
        <p><strong>Instructions:</strong>
            <li>Slice the sausage.</li>
            <li>Peel and chop the eggs.</li>
            <li>Chop the onions and garlic, then sauté them in butter in a large pot.</li>
            <li>Add the flour, stir, and sauté for a few minutes.</li>
            <li>Pour 2 liters of water into the pot.</li>
            <li>Add vinegar, salt, pepper, marjoram, bay leaves, allspice, sliced sausage, and eggs.</li>
            <li>Simmer over low heat for about 30-40 minutes.</li>
            <li>Serve with slices of rye bread.</li>
        </p>
    </div>
</div>
<!--<div class="mv-create-ingredients">-->
<!--    <h3 class="mv-create-ingredients-title mv-create-title-secondary">Ingredients</h3>-->
<!---->
<!--    <ul>-->
<!--        <li>1 kg white sausage</li>-->
<!--        <li>7 oz (200g) unsliced bacon</li>-->
<!--        <li>1 (200g, 7 oz) medium white onion</li>-->
<!--        <li>2 medium carrots (roughly 4.2 oz, 120g)</li>-->
<!--        <li>2 parsley roots (roughly 4.2 oz, 120g) - can be substituted for a celery root)</li>-->
<!--        <li>4 links (500g, 1.1 lb) white kiełbasa sausage (fresh, uncooked)</li>-->
<!--        <li>2 ¼ cups (500ml) Sour Rye Flour Starter&nbsp;(link to a recipe in the notes)</li>-->
<!--        <li>1 garlic clove</li>-->
<!--        <li>3 tbsp whipping cream (optional, 30-36% fat)</li>-->
<!--        <li>1 tbsp dried marjoram</li>-->
<!--        <li>Salt to taste</li>-->
<!--        <li>Pepper (freshly ground) to taste</li>-->
<!--    </ul>-->
<!--    <h4>If using a homemade 'zakwas' fermented without spices:</h4>-->
<!--    <ul>-->
<!--        <li>4 bay leaves</li>-->
<!--        <li>5 all-spice berries</li>-->
<!--        <li>5 black peppercorns</li>-->
<!--    </ul>-->
<!--    <h4>To serve:</h4>-->
<!--    <ul>-->
<!--        <li>4 boiled eggs, halved</li>-->
<!--        <li>Fresh marjoram to garnish</li>-->
<!--    </ul>-->
<!--</div>-->

<script src="public/js/script_sidebar.js"></script>

</body>

</html>
