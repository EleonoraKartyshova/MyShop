<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 18.10.18
 * Time: 17:31
 */

namespace MyShop\Service;

use Shop\Session\Session;

class ProductsFilter
{
    public static function set_filter($filter_data)
    {
        Session::set_data('filter', $filter_data);
    }

    public static function get_filter()
    {
        return Session::get_data('filter');
    }

    public static function clear_filter()
    {
        Session::set_data('filter', []);
    }
}