<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 17.07.18
 * Time: 18:15
 */
namespace MyShop\Models;

use MyShop\Tables\Users;
use Shop\Core\Model;
use Shop\Core\Authentication\Authentication;
use Shop\Session\Session;

class AuthModel extends Model
{
    public function auth($new_login, $new_password)
    {
        $data_auth = array();
        $obj = new Users();
        $users = $obj->get_all_records();
        foreach ($users as $key => $user) {
            if (Authentication::auth($new_login, $new_password, $user->email, $user->passw))
            {
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