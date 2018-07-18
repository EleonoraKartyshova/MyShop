<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:42
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\controllers\FrontController;
class MainController extends FrontController
{
    /*public function __construct()
    {
        parent::__construct();
        $this->view->generate('mainView.php');
    }*/
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}