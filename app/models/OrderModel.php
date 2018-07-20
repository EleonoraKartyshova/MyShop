<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:23
 */
namespace MyShop\models;

use Shop\core\Model;
use Shop\session\Session;
use Shop\exceptions\AuthException;
use Shop\exceptions\OrderException;

class OrderModel
{
    public $table_name = 'orders';
    public $additional_table_name = 'orders_products';
    public function place_an_order()
    {
        if (!Session::cookieExists())
        {
            throw new AuthException();
        }
        if (empty($_SESSION['basket']))
        {
            throw new OrderException();
        }
        $obj = new Model();
        //$field_val = [];
        $field = 'user_id';
        Session::start();
        //var_dump($_SESSION['user_id']);
        $value = $_SESSION['user_id'];
        $field_val = [$field => $value];
        $obj->add_record($this->table_name, $field_val);

        $field1 = 'order_id';
        $field2 = 'product_id';
        $value1 = $obj->get_last_record_id($this->table_name);
        //$order_id = $obj->get_column_by_id($this->additional_table_name, $rec_id);
        foreach ($_SESSION['basket'] as $key=>$product){
            $value2 = $key;
            $field_val = [$field1 => $value1, $field2 => $value2];
            $obj->add_record($this->additional_table_name, $field_val);
        }
    }
}