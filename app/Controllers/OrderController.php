<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:27
 */
namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Models\OrderModel;
use MyShop\Service\Authentication;
use MyShop\Service\Basket;
use Shop\Exceptions\AuthException;
use Shop\Exceptions\OrderException;
use Shop\Logs\ShopLogger;

class OrderController extends FrontController
{
    public function place_an_order()
    {
        try {
            if (!Authentication::is_auth()) {
                throw new AuthException('User is not authorized', '4012');
            }
            if (empty(Basket::get_basket())) {
                throw new OrderException('Shopping cart is empty', '405');
            }
            $user_id = Authentication::get_user_id();
            $products = Basket::get_basket();
            $obj = new OrderModel();
            $obj->place_an_order($user_id, $products);
            Basket::clear_basket();
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