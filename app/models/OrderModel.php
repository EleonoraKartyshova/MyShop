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

class OrderModel extends Model
{
    public $table_name = 'orders';
    public $additional_table_name = 'orders_products';
    protected $db_connect;

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

        Session::start();
        if (isset($_POST["order"]) && $_POST["order"] == $_SESSION["order"] )
        {
            $field = 'user_id';
            $value = $_SESSION['user_id'];
            $field_val = [$field => $value];
            $this->db_connect->add_record($this->table_name, $field_val);
            $field1 = 'order_id';
            $field2 = 'product_id';
            $value1 = $this->db_connect->get_last_record_id($this->table_name);
            foreach ($_SESSION['basket'] as $key=>$product){
                $value2 = $key;
                $field_val = [$field1 => $value1, $field2 => $value2];
                $this->db_connect->add_record($this->additional_table_name, $field_val);
            }
            $_SESSION["order"] = rand();
            $_SESSION['basket'] = [];
        }

    }
}