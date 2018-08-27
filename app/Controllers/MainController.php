<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:42
 */
namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Controllers\FrontController;
use Shop\Core\View;

class MainController extends FrontController
{
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}