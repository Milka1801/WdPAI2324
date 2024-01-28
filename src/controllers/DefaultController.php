<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        $this->render('login');
    }


    public function zurek()
    {
        $this->render('zurek');
    }
    public function myRecipe()
    {
        $this->render('project');
    }
    public function menu()
    {
        $this->render('menu');
    }
    public function admin()
    {
        $this->render('admin');
    }

}
//    public function menu()
//    {
//        $this->render('menu');
//    }
//}

//require_once 'AppController.php';