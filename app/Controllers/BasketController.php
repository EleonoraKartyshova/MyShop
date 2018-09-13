<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:44
 */
namespace MyShop\Controllers;

use MyShop\Models\BasketModel;
use MyShop\Service\Authentication;
use Shop\Exceptions\AuthException;
use Shop\Logs\ShopLogger;
use MyShop\Controllers\ErrorController;
use MyShop\Service\Basket;

class BasketController extends FrontController
{
    public function action_index()
    {
        $this->view->generate('basketView.php');
    }
    public function add_to_basket($id)
    {
        try {
            if (!Authentication::is_auth()) {
                throw new AuthException('User is not authorized', '4011');
            }
            $obj = new BasketModel();
            $basket_product = $obj->add_to_basket($id);
            $data = Basket::add_to_basket($basket_product);
            $data2 = Basket::order_price($data);
            $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
    public function basket()
    {
        $data = Basket::get_basket();
        $data2 = Basket::order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
    }
    public function delete_from_basket($id)
    {
        $data = Basket::delete_from_basket($id);
        $data2 = Basket::order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
    }
}