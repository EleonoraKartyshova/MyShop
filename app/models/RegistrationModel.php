<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:04
 */
namespace MyShop\models;

use MyShop\tables\Users;
use Shop\core\Model;
use Shop\session\Session;

class RegistrationModel extends Model
{
    public function reg($new_login, $new_password, $new_phone_number, $new_role = 0)
    {
        $obj = new Users();
        $users = $obj->get_all_records();
        $fl = true;
        foreach ($users as $key => $user) {
            if ($new_login == $user->email) {
                $fl = false;
            }
        }
        $data_auth = [];
        if ($fl)
        {
            $obj->registration($new_login, $new_password, $new_phone_number, $new_role);
            $user_id = $obj->get_last_record_id();
            Session::start();
            $_SESSION['login'] = $new_login;
            $_SESSION['password'] = $new_password;
            $_SESSION['user_id'] = $user_id;
            $data_auth['auth'] = true;
            $data_auth['login'] =$_SESSION['login'];
        }
        return $data_auth;
    }
}