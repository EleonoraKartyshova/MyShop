<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:27
 */

namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\models\OrderModel;

class OrderController extends FrontController
{
    public function place_an_order()
    {
        $obj = new OrderModel();
        $obj->place_an_order();
        $this->view->generate('orderView.php');
    }
}