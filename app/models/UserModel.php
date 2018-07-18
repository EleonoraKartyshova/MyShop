<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:52
 */
namespace MyShop\models;
use MyShop\core\Model;
class UserModel
{
    public $table_name = 'users';
    public function usr() {
        echo "usrModel";
    }
    public function get_id_by_value($this->table_name, $column, $value)
    {
        $obj = new Model();
        //$_SESSION['user_id'] = ;
    }
}