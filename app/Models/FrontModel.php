<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 01.11.18
 * Time: 20:12
 */

namespace MyShop\Models;

use Shop\Core\Model;
use MyShop\Tables\UsersIP;


class FrontModel extends Model
{
    public function get_real_ip_addr()
    {
        $http_client_ip = '';
        $http_x_forwarded_for = '';
        $remote_addr = '';
        $country = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
            $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
            $ip = $http_client_ip;
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
            $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
            $ip = $http_x_forwarded_for;
        } else {
            $remote_addr = $_SERVER['REMOTE_ADDR'];
            $ip = $remote_addr;
        }
        $clientDetails = json_decode(file_get_contents("http://ipinfo.io/$ip/json"));
        $country = json_encode($clientDetails->country);
        $obj = new UsersIP();
        $obj->users_ip($http_client_ip, $http_x_forwarded_for, $remote_addr, $country);
        return $country;
    }
}