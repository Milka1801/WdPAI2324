<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('projects', 'RecipeController');
Routing::get('myRecipe', 'DefaultController');
Routing::get('admin', 'DefaultController');
Routing::get('zurek', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('logout', 'SecurityController');
Routing::post('addProjects', 'RecipeController');
Routing::post('project', 'RecipeController');
Routing::get('menu', 'DefaultController');
Routing::post('register', 'SecurityController');




Routing::run($path);