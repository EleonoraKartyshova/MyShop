<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */

namespace MyShop\models;
use MyShop\core\Model;
//use MyShop\core\authentication\Authentication;
class ProductsModel extends Model
{
    public $table_name = 'products';
    public function get_all_rec()
    {
        $obj = new Model();
        //$data = [];
        $data = $obj->get_all_records($this->table_name);
//        if (Authentication::is_auth()){
//            $data['auth'] = true;
//            $data['login'] = $_SESSION['login'];
//        }else{
//            $data['auth'] = false;
//        }
        return $data;
    }
}