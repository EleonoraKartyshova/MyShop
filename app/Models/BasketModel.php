<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:47
 */
namespace MyShop\Models;

use Shop\Core\Model;
use MyShop\Tables\Products;

class BasketModel extends Model
{
    public function add_to_basket($id)
    {
        $obj = new Products();
        $product = $obj->get_record_by_id($id);
        if ($product) {
            $basket_product = [
                $product->id  => [
                    'picture' => $product->picture,
                    'title'   => $product->title,
                    'price'   => $product->price
                ]
            ];
            return $basket_product;
        } else {
            return false;
        }
    }
}