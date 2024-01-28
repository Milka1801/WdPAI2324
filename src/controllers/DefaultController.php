<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        $this->render('login');
    }

    public function projects()
    {
        $this->render('projects');
    }
    public function zurek()
    {
        $this->render('zurek');
    }
    public function myRecipes()
    {
        $this->render('myRecipes');
    }
    public function menu()
    {
        $this->render('menu');
    }


}
//    public function menu()
//    {
//        $this->render('menu');
//    }
//}

//require_once 'AppController.php';