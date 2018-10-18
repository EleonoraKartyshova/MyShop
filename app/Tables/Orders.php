<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:33
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;
use Shop\QueryBuilder;

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
        $sql = QueryBuilder::select($this->table_name, ['orders.id', 'products.picture', 'products.title', 'products.price', 'orders.created_at']) .
            QueryBuilder::inner_join('orders_products') .
            QueryBuilder::inner_join('products') .
            QueryBuilder::on(['orders.id', 'orders_products.product_id'], ['orders_products.order_id', 'products.id']) .
            QueryBuilder::where('orders.user_id', $user_id) .
            QueryBuilder::order_by('orders', 'created_at', 'DESC');
        return $this->my_query($sql);
    }
    public function place_an_order($us_id)
    {
        $this->user_id = $us_id;
        $this->add_record();
    }
}