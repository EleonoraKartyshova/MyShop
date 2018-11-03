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
    public $page_number = 3;

    public function action_index()
    {
        $data = Basket::get_basket();
        $data2 = Basket::order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2, "page_number" => $this->page_number]);
    }
    public function add_to_basket($params = "")
    {
        if (isset($params['id'])) {
            $obj = new BasketModel();
            $basket_product = $obj->add_to_basket($params['id']);
            if ($basket_product) {
                $data = Basket::add_to_basket($basket_product);
                $data2 = Basket::order_price($data);
                $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2, "page_number" => $this->page_number]);
            } else {
                $this->action_index();
            }
        } else {
            $this->action_index();
        }
    }
    public function delete_from_basket($params = "")
    {
        if (isset($params['id'])) {
            $data = Basket::delete_from_basket($params['id']);
            $data2 = Basket::order_price($data);
            $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2, "page_number" => $this->page_number]);

        } else {
            $this->action_index();
        }
    }
}