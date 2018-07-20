<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 18:15
 */
namespace MyShop\models;

use Shop\core\Model;
use Shop\core\authentication\Authentication;
use Shop\session\Session;

class AuthModel extends Model
{
    public $table_name = 'users';
    protected $db_connect;

    public function get_all_records()
    {
        $result = $this->db_connect->get_all_records($this->table_name);
        return $result;
    }

    public function auth($new_login, $new_password)
    {
        $data_auth = array();
        $users = $this->db_connect->get_all_records($this->table_name);
        foreach ($users as $key => $user) {
            if (Authentication::auth($new_login, $new_password, $user->email, $user->passw)) {
                Session::start();
                $_SESSION['login'] = $new_login;
                $_SESSION['password'] = $new_password;
                $_SESSION['user_id'] = $user->id;
                $data_auth['auth'] = true;
                $data_auth['login'] =$_SESSION['login'];
                return $data_auth;
            } else {
                $data_auth['auth'] = false;
            }
        }
        return $data_auth;
    }

}