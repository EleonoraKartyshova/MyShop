<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\models;
use MyShop\core\Model;



class ProductModel extends Model
{
    public $table_name = 'products';

    public function get_rec_by_id($id)
    {
        $obj = new Model();
        $result = $obj->get_record_by_id($this->table_name, $id);
        return $result;
    }
}