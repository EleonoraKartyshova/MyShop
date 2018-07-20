<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:52
 */
namespace MyShop\models;

use Shop\core\Model;

class UserModel extends Model
{
    public $table_name = 'users';
    protected $db_connect;
}