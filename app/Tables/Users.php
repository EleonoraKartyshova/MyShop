<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:33
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;

class Users extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'users';
    public $id;
    public $email;
    public $passw;
    public $phone_number;
    public $role;
    public $created_at;
    public $updated_at;

    public function registration($new_login, $new_password, $new_phone_number, $new_role)
    {
        $this->email = $new_login;
        $this->passw = $new_password;
        $this->phone_number = $new_phone_number;
        $this->role = $new_role;
        $this->add_record();
    }
}