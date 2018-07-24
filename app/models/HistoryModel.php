<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:35
 */

namespace MyShop\models;

use Shop\core\Model;
use Shop\session\Session;
use Shop\exceptions\AuthException;

class HistoryModel extends Model
{
    public $table_name_prod = 'products';
    public $table_name_orders = 'orders';
    public $table_name_or_prod = 'orders_products';

    protected $db_connect;

    public function orders_history()
    {
        if (!Session::cookieExists())
        {
            throw new AuthException('User is not authorized', '401');

        }
        Session::start();
        $user_id = $_SESSION['user_id'];
        $sql = 'SELECT orders.id, products.picture, products.title, products.price, orders.created_at
                FROM orders INNER JOIN orders_products INNER JOIN products
                ON orders.id = orders_products.order_id AND orders_products.product_id = products.id
                WHERE orders.user_id = '.$user_id. ' ORDER BY orders.created_at DESC';

        $data['orders'] = $this->db_connect->my_query($sql);

        return $data;
    }
}