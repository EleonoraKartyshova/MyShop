<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:47
 */
namespace MyShop\models;
use MyShop\core\Model;

class BasketModel
{
    public $table_name = 'products';

    public function add_to_basket($id)
    {
        session_start();
        $obj = new Model();
        $result = $obj->get_record_by_id($this->table_name, $id);
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
        //session_start();
        if (!isset($_SESSION['basket'])){
            $_SESSION['basket'] = [];
        }
        return $_SESSION['basket'];
    }
    public function delete_from_basket($id)
    {
        session_start();
        unset($_SESSION['basket'][$id]);
        return $_SESSION['basket'];
    }
}