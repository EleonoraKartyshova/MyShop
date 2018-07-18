<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 16:23
 */

namespace MyShop\models;
use MyShop\core\Model;

class OrderModel
{
    public $table_name = 'orders';
    public $additional_table_name = 'orders_product';
    public function place_an_order()
    {
        $obj = new Model();
        $col1 = 'user_id';
        session_start();
        var_dump($_SESSION['user_id']);
        $val1 = $_SESSION['user_id'];
        $obj->add_record($this->table_name, $col1, '', '', '', '', $val1, '', '', '', '');


        $col1 = 'order_id';
        $col2 = 'product_id';
        $val1 = $obj->get_last_record_id($this->table_name);
        //$order_id = $obj->get_column_by_id($this->additional_table_name, $rec_id);
        foreach ($_SESSION['basket'] as $key=>$product){
            $val2 = $key;
            $obj->add_record($this->additional_table_name, $col1, $col2, '', '', '', $val1, $val2, '', '', '');
        }
    }
}