<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\Models;

use Shop\Core\Model;
use MyShop\Tables\Products;

class ProductsModel extends Model
{
    public function get_products()
    {
        $obj = new Products();
        $data = $obj->get_all_records();
        return $data;
    }
}