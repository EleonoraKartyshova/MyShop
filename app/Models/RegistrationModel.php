<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:04
 */
namespace MyShop\Models;

use MyShop\Tables\Users;
use Shop\Core\Model;

class RegistrationModel extends Model
{
    public function reg($new_login, $new_password, $new_phone_number, $new_role = 0)
    {
        $data_auth = [];
        $obj = new Users();
        $users = $obj->get_all_records();
        $fl = true;
        foreach ($users as $key => $user) {
            if ($new_login == $user->email) {
                $fl = false;
            }
        }
        if ($fl) {
            $obj->registration($new_login, $new_password, $new_phone_number, $new_role);
            $user_id = $obj->get_last_record_id();
            $data_auth['auth'] = true;
            $data_auth['login'] = $new_login;
            $data_auth['password'] = $new_password;
            $data_auth['user_id'] = $user_id;
            $data_auth['role'] = $new_role;
        }
        return $data_auth;
    }
}