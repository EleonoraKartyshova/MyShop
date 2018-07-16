<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */

namespace MyShop\models;
use MyShop\core\Model;

class ProductsModel extends Model
{
    public $table_name = 'products';
    public function get_all_rec()
    {
        $obj = new Model();
        return $obj->get_all_records($this->table_name);
    }
}