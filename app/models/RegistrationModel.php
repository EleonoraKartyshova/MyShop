<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 12:04
 */
namespace MyShop\models;

use Shop\core\Model;
use Shop\session\Session;

class RegistrationModel extends Model
{
    public $table_name = 'users';
    protected $db_connect;

    public function reg($new_login, $new_password, $new_phone_number)
    {
        $users = $this->db_connect->get_all_records($this->table_name);
        $fl = true;
        foreach ($users as $key => $user) {
            if ($new_login == $user->email) {
                $fl = false;
            }
        }
        $data_auth = [];
        if ($fl)
        {
            $field1 = 'email';
            $field2 = 'passw';
            $field3 = 'phone_number';
            $value1 = $new_login;
            $value2 = $new_password;
            $value3 = $new_phone_number;
            $field_val = [$field1 => $value1, $field2 => $value2, $field3 => $value3];
            $this->db_connect->add_record($this->table_name, $field_val);

            $user_id = $this->db_connect->get_last_record_id($this->table_name);
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