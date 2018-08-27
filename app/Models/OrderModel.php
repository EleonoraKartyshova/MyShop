<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:23
 */
namespace MyShop\Models;

use MyShop\Tables\Orders;
use MyShop\Tables\OrdersProducts;
use Shop\Core\Model;
use Shop\Session\Session;
use Shop\Exceptions\AuthException;
use Shop\Exceptions\OrderException;

class OrderModel extends Model
{
    public function place_an_order()
    {
        if (!Session::cookieExists())
        {
            throw new AuthException('User is not authorized', '4012');
        }
        if (empty($_SESSION['basket']))
        {
            throw new OrderException('Shopping cart is empty', '405');
        }
        Session::start();
        if (isset($_POST["order"]) && $_POST["order"] == $_SESSION["order"] )
        {
            $obj = new Orders();
            $obj->place_an_order($_SESSION['user_id']);
            $order_id = $obj->get_last_record_id();
            $obj = new OrdersProducts();
            foreach ($_SESSION['basket'] as $key=>$product){
                $product_id = $key;
                $obj->place_an_order($order_id, $product_id);
            }
            $_SESSION["order"] = rand();
            $_SESSION['basket'] = [];
        }
    }
}