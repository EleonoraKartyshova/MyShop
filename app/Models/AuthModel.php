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

class AuthModel extends Model
{
    public function auth($new_login, $new_password)
    {
        $data_auth = [];
        $obj = new Users();
        $users = $obj->get_all_records();
        foreach ($users as $key => $user) {
            if ($new_login == $user->email && $new_password == $user->passw) {
                $data_auth['auth'] = true;
                $data_auth['login'] = $new_login;
                $data_auth['password'] = $new_password;
                $data_auth['user_id'] = $user->id;
                $data_auth['role'] = $user->role;
                return $data_auth;
            } else {
                $data_auth['auth'] = false;
            }
        }
        return $data_auth;
    }
}