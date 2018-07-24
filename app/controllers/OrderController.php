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
use Shop\logs\ShopLogger;

class OrderController extends FrontController
{
    public function place_an_order()
    {
        $obj = new OrderModel();
        try {
            $obj->place_an_order();
            $this->view->generate('orderView.php');
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        } catch (OrderException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
}