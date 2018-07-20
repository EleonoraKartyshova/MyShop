<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:27
 */
namespace MyShop\controllers;

use Shop\core\Controller;
use MyShop\models\OrderModel;
use Shop\exceptions\AuthException;
use Shop\exceptions\OrderException;

class OrderController extends FrontController
{
    public function place_an_order()
    {
        $obj = new OrderModel();
        try {
            $obj->place_an_order();
            $this->view->generate('orderView.php');
        } catch (AuthException $e) {
            $this->view->generate('errorBasketOrderView.php');
        } catch (OrderException $e) {
            $this->view->generate('errorOrderView.php');
        }
    }
}