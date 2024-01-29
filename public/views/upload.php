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
    <link rel="stylesheet" type="text/css" href="public/css/basic.css">

    <title>Upload</title>
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

<div class="upload-section">
    <h2 class="upload-h2">Upload Recipe</h2>
    <form id="upload-form" enctype="multipart/form-data" action="addProjects" method="post">
        <?php
        if(isset($messages)) {
            foreach($messages as $message) {
                echo $message;
            }
        }
        ?>
        <label for="recipe-name">Title:</label>
        <input type="text" id="recipe-name" name="name" required>

        <label for="cuisine">Cuisine:</label>
        <select id="cuisine" name="cuisine" required>
            <option value="italian">Italian</option>
            <option value="chinese">Chinese</option>
            <option value="polish">Polish</option>
            <option value="mexican">Mexican</option>
            <option value="american">American</option>
            <option value="japanese">Japanese</option>
        </select>

        <label for="recipe-description">Description:</label>
        <textarea id="recipe-description" name="description" required></textarea>

        <label for="recipe-file">Image:</label>
        <input class="upload-input" type="file" id="recipe-file" name="file" accept=".jpeg, .png" required>

        <button class="upload-button" type="submit" >Submit</button>
    </form>
</div>



<script src="public/js/script_sidebar.js"></script>

</body>
</html>
