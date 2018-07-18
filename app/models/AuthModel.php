<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 18:15
 */

namespace MyShop\models;
use MyShop\core\Model;
use MyShop\core\authentication\Authentication;

class AuthModel
{
    public $table_name = 'users';

    public function get_all_records()
    {
        $obj = new Model();
        $result = $obj->get_all_records($this->table_name);
        return $result;
    }

    public function auth($new_login, $new_password)
    {
        $data_auth = array();
        //$fl = false;
        $obj = new Model();
        $users = $obj->get_all_records($this->table_name);
        foreach ($users as $key => $user) {
            if (Authentication::auth($new_login, $new_password, $user->email, $user->passw)) {
                session_start();
                $_SESSION['login'] = $new_login;
                $_SESSION['password'] = $new_password;
                $_SESSION['user_id'] = $user->id;
                //$fl = true;
                $data_auth['auth'] = true;
                $data_auth['login'] =$_SESSION['login'];
            }
        }

        return $data_auth;
    }

}