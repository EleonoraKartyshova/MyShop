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
    public function get_products($category)
    {
        $obj = new Products();
        if ($category == 'all') {
            $data = $obj->get_all_records();
        } else {
            $data = $obj->get_all_records_by_value('category', $category);
        }
        return $data;
    }
}