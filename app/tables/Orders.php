<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:33
 */
namespace MyShop\tables;

use Shop\ActiveRecord;

class Orders extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'orders';
    public $id;
    public $user_id;
    public $created_at;
    public $updated_at;

    public function orders_history($user_id)
    {
        $sql = 'SELECT orders.id, products.picture, products.title, products.price, orders.created_at
                FROM orders INNER JOIN orders_products INNER JOIN products
                ON orders.id = orders_products.order_id AND orders_products.product_id = products.id
                WHERE orders.user_id = '.$user_id. ' ORDER BY orders.created_at DESC';
        return $this->my_query($sql);
    }
    public function place_an_order($us_id)
    {
        $this->user_id = $us_id;
        $this->add_record();
    }
}