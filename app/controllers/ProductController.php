<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:45
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
class ProductController extends Controller
{
    public function action_index()
    {
        $this->view->generate('productView.php');
    }
}