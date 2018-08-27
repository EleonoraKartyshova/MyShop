<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:34
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;

class OrdersProducts extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'orders_products';
    public $id;
    public $order_id;
    public $product_id;
    public $created_at;
    public $updated_at;

    public function place_an_order($order_id, $product_id)
    {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->add_record();
    }
}