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

<!--    <style>-->
<!--        body {-->
<!--            background: #FEE1DD;-->
<!--            overflow: auto;-->
<!--            padding: 0;-->
<!--        }-->
<!--        h1 {-->
<!--            color: #262626;-->
<!--            font-size: larger;-->
<!--            align-content: center;-->
<!--            justify-content: center;-->
<!--            display: flex;-->
<!--            flex-wrap: wrap;-->
<!--        }-->
<!---->
<!--        #header {-->
<!--            background-color: #CEA0AA;-->
<!--            padding: 5px;-->
<!--            font-family: "Cookie", cursive;-->
<!--            display: flex;-->
<!--            justify-content: space-between;-->
<!--        }-->
<!--        button {-->
<!--            border: none;-->
<!--            height: 25px;-->
<!--            border-radius: 30px;-->
<!--        }-->
<!---->
<!---->
<!--        .search-center {-->
<!--            text-align: center;-->
<!--            margin: 20px;-->
<!--        }-->
<!---->
<!--        .search-center input {-->
<!--            width: 80%;-->
<!--            height: 25px;-->
<!--            /* padding: 10px;-->
<!--            width: 300px; */-->
<!--            border-radius: 30px;-->
<!--            border: none;-->
<!--        }-->
<!---->
<!--        .search-center button {-->
<!--            background-color: #efefef;-->
<!--            border: none;-->
<!--            padding: 1px 6px;-->
<!--            font-size: 16px;-->
<!--            cursor: pointer;-->
<!--            display: inline-block;-->
<!--        }-->
<!---->
<!--        .upload-section {-->
<!--            width: 60%;-->
<!--            margin: 50px auto;-->
<!--            padding: 20px;-->
<!--            border: 1px solid #ccc;-->
<!--            border-radius: 5px;-->
<!--            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);-->
<!--        }-->
<!---->
<!--        h2 {-->
<!--            text-align: center;-->
<!--            font-size: 24px;-->
<!--        }-->
<!---->
<!--        form {-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            max-width: 400px;-->
<!--            margin: 0 auto;-->
<!--        }-->
<!---->
<!--        label {-->
<!--            margin-top: 10px;-->
<!--            font-size: 20px;-->
<!--            font-family: cursive, Verdana, Geneva, Tahoma, sans-serif;-->
<!--        }-->
<!---->
<!--        input, select, textarea {-->
<!--            margin-top: 5px;-->
<!--            padding: 10px;-->
<!--            width: 100%;-->
<!--            box-sizing: border-box;-->
<!--            border-radius: 20px;-->
<!--            border: 1px solid #ccc;-->
<!--        }-->
<!---->
<!--        textarea {-->
<!--            height: 100px;-->
<!--            resize: none;-->
<!--            border-radius: 10px;-->
<!--        }-->
<!---->

<!--        #sidebar {-->
<!--            width: 250px;-->
<!--            height: 100vh;-->
<!--            background-color: #555;-->
<!--            color: #fff;-->
<!--            position: fixed;-->
<!--            left: -250px;-->
<!--            top: 0;-->
<!--            transition: left 0.3s ease;-->
<!--            padding-top: 60px;-->
<!---->
<!--        }-->
<!--        #sidebar a {-->
<!--            padding: 10px;-->
<!--            font-size: 1.4rem;-->
<!--            text-decoration: none;-->
<!--            color: #fff;-->
<!--            display: block;-->
<!--        }-->
<!---->
<!--        #sidebar a:hover {-->
<!--            background-color: #777;-->
<!--        }-->
<!--        a.active,a:hover{-->
<!--            border-left: 5px solid #b93632;-->
<!--            color: #b93632;-->
<!--        }-->
<!--        #menu-icon {-->
<!--            position: fixed;-->
<!--            left: 10px;-->
<!--            top: 10px;-->
<!--            cursor: pointer;-->
<!--            color: white;-->
<!--            border-radius: 5px;-->
<!--            border: 1px solid #262626;-->
<!--            margin: 15px 30px;-->
<!--            font-size: 29px;-->
<!--            background: #262626;-->
<!--            height: 45px;-->
<!--            width: 45px;-->
<!--            text-align: center;-->
<!--            line-height: 45px;-->
<!--            transition: all .5s ease;-->
<!--        }-->
<!--        .upload-section{-->
<!--            background-color: #cea0aaa1;-->
<!---->
<!---->
<!--        }-->
<!--        #menu-button {-->
<!--            /* background-color: #4CAF50; */-->
<!--            background-color: #E9C2C5;-->
<!--            color: white;-->
<!--            border: none;-->
<!--            padding: 10px 15px;-->
<!--            font-size: 16px;-->
<!--            cursor: pointer;-->
<!--            display: flex;-->
<!--            align-items: center;-->
<!--            justify-content: center;-->
<!--        }-->
<!---->
<!---->
<!--    </style>-->



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
        <a class="upload-a" href="/logout">Logout</a>
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
    <h2 class="upload-h2">Upload Przepisu</h2>
    <form id="upload-form" enctype="multipart/form-data" action="addProjects" method="post">
        <?php
        if(isset($messages)) {
            foreach($messages as $message) {
                echo $message;
            }
        }
        ?>
        <label for="recipe-name">Nazwa przepisu:</label>
        <input type="text" id="recipe-name" name="name" required>

        <label for="cuisine">Kuchnia:</label>
        <select id="cuisine" name="cuisine" required>
            <option value="italian">Włoska</option>
            <option value="chinese">Chińska</option>
            <option value="polish">Polska</option>
            <option value="mexican">Meksykańska</option>
            <option value="american">Amerykańska</option>
            <option value="japanese">Japońska</option>
        </select>

        <label for="recipe-description">Opis przepisu:</label>
        <textarea id="recipe-description" name="description" required></textarea>

        <label for="recipe-file">Wybierz plik przepisu:</label>
        <input class="upload-input" type="file" id="recipe-file" name="file" accept=".jpeg, .png" required>

        <button class="upload-button" type="submit" >Prześlij</button>
    </form>
</div>



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
