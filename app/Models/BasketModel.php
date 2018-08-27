<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:47
 */
namespace MyShop\Models;

use Shop\Core\Model;
use Shop\Exceptions\AuthException;
use Shop\Session\Session;
use MyShop\Tables\Products;

class BasketModel extends Model
{
    public function add_to_basket($id)
    {
        if (!Session::cookieExists()) {
            throw new AuthException('User is not authorized', '4011');
        }
        Session::start();
        $obj = new Products();
        $result = $obj->get_record_by_id($id);
        foreach ($result as $key => $product) {
            $basket_product = [
                $product->id  => [
                    'picture' => $product->picture,
                    'title'   => $product->title,
                    'price'   => $product->price
                ]
            ];
            if (!empty(Session::get_data('basket'))) {
                Session::add_data('basket', $basket_product);
            } else {
                Session::set_data('basket', $basket_product);
            }
        }
        return Session::get_data('basket');
    }
    public function order_price($data)
    {
        $order_price = 0;
        foreach($data as $key=>$product) {
            $order_price = $order_price + $product['price'];
        }
        return $order_price;
    }
    public function basket()
    {
        if (Session::cookieExists()) {
            Session::start();
        }
        if (empty(Session::get_data('basket'))) {
            Session::set_data('basket', []);
        }
        return Session::get_data('basket');
    }
    public function delete_from_basket($id)
    {
        Session::start();
        Session::delete('basket', $id);
        return Session::get_data('basket');
    }
}