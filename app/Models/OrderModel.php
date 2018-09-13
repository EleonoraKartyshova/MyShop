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

class OrderModel extends Model
{
    public function place_an_order($user_id, $products)
    {
        $obj = new Orders();
        $obj->place_an_order($user_id);
        $order_id = $obj->get_last_record_id();
        $obj = new OrdersProducts();
        foreach ($products as $key => $product) {
            $product_id = $key;
            $obj->place_an_order($order_id, $product_id);
        }
    }
}