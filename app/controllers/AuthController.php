<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 16:14
 */

namespace MyShop\controllers;

use MyShop\core\authentication\Authentication;

class AuthController
{
    public static function logout()
    {
        Authentication::logout();
    }
    public static function auth()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        Authentication::auth($login, $password);
    }
    public static function is_auth()
    {
        return Authentication::is_auth();
    }
    public static function get_login()
    {
        return Authentication::get_login();
    }

}