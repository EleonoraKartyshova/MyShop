<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\models;
use MyShop\core\Model;
use MyShop\core\authentication\Authentication;
class ProductModel extends Model
{
    public $table_name = 'products';

    public function get_rec_by_id($id)
    {
        $obj = new Model();
        //$data = [];
        $data = $obj->get_record_by_id($this->table_name, $id);
//        if (Authentication::is_auth()){
//            $data['auth'] = true;
//            $data['login'] = $_SESSION['login'];
//        }else{
//            $data['auth'] = false;
//        }
        return $data;
    }
}