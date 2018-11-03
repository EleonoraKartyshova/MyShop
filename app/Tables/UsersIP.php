<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 01.11.18
 * Time: 20:08
 */

namespace MyShop\Tables;

use Shop\ActiveRecord;

class UsersIP extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'users_ip';
    public $id;
    public $http_client_ip;
    public $http_x_forwarded_for;
    public $remote_addr;
    public $country;
    public $created_at;
    public $updated_at;

    public function users_ip($http_client_ip, $http_x_forwarded_for, $remote_addr, $country)
    {
        $this->http_client_ip = $http_client_ip;
        $this->http_x_forwarded_for = $http_x_forwarded_for;
        $this->remote_addr = $remote_addr;
        $this->country = $country;
        $this->add_record();
    }
}