<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 28.08.18
 * Time: 21:48
 */

namespace MyShop\Service;

use Shop\Session\Session;

class Basket
{
    public static function get_basket()
    {
        if (Session::cookieExists()) {
             Session::start();
        }
        if (!Session::cookieExists()) {
            return $data = [];
        }
        if (!Session::get_data('basket')) {
            Session::set_data('basket', []);
        }
        return Session::get_data('basket');
    }
    public static function add_to_basket($basket_product)
    {
        Session::start();
        if (!empty(Session::get_data('basket'))) {
            Session::add_data('basket', $basket_product);
        } else {
            Session::set_data('basket', $basket_product);
        }
        return Session::get_data('basket');
    }
    public static function delete_from_basket($id)
    {
        Session::start();
        Session::delete('basket', $id);
        return Session::get_data('basket');
    }
    public static function order_price($data)
    {
        $order_price = 0;
        foreach($data as $key => $product) {
            $order_price = $order_price + $product['price'];
        }
        return $order_price;
    }
    public static function clear_basket()
    {
        Session::set_data('basket', []);
    }
}