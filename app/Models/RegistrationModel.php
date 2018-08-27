<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:04
 */
namespace MyShop\Models;

use MyShop\Tables\Users;
use Shop\Core\Authentication\Authentication;
use Shop\Core\Model;
use Shop\Session\Session;

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
        if ($fl) {
            $obj->registration($new_login, $new_password, $new_phone_number, $new_role);
            $user_id = $obj->get_last_record_id();
            Session::start();
            Session::set_data('login', $new_login);
            Session::set_data('password', $new_password);
            Session::set_data('user_id', $user_id);
            $data_auth['auth'] = true;
            $data_auth['login'] = Authentication::get_login();
        }
        return $data_auth;
    }
}