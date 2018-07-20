<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:47
 */
namespace MyShop\models;

use Shop\core\Model;
use Shop\exceptions\AuthException;
use Shop\session\Session;

class BasketModel extends Model
{
    public $table_name = 'products';
    protected $db_connect;

    public function add_to_basket($id)
    {
        if (!Session::cookieExists())
        {
            throw new AuthException();
        }
        Session::start();
        $result = $this->db_connect->get_record_by_id($this->table_name, $id);
        foreach ($result as $key => $product) {
            if (!empty($_SESSION['basket'])) {
                $_SESSION['basket'] += [
                    $product->id => [
                        'picture' => $product->picture,
                        'title' => $product->title,
                        'price' => $product->price
                    ]
                ];
            } else {
                $_SESSION['basket'] = [
                    $product->id => [
                        'picture' => $product->picture,
                        'title' => $product->title,
                        'price' => $product->price
                    ]
                ];
            }
        }
        return $_SESSION['basket'];
    }
    public function order_price($data)
    {
        $order_price = 0;
        foreach($data as $key=>$product){
            $order_price = $order_price + $product['price'];
        }
        return $order_price;
    }
    public function basket()
    {
        if (Session::cookieExists())
        {
            Session::start();
        }
        if (!isset($_SESSION['basket'])){
            $_SESSION['basket'] = [];
        }
        return $_SESSION['basket'];
    }
    public function delete_from_basket($id)
    {
        Session::start();
        unset($_SESSION['basket'][$id]);
        return $_SESSION['basket'];
    }
}