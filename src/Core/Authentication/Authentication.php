<?php
namespace Shop\Core\Authentication;

use Shop\Session\Session;
class Authentication
{
    public static function auth($new_login, $new_password, $login, $password)
    {
        if ($new_login == $login && $new_password == $password)
        {
            return true;
        } else {
            return false;
        }
    }
    public static function is_auth()
    {
        if(Session::cookieExists())
        {
            Session::start();
            return true;
        } else {
            return false;
        }
    }
    public static function get_login()
    {
        return Session::get_data('login');
    }
    public static function logout()
    {
        session_unset();
        session_destroy();
        setcookie(session_name(),'', -1, '/');
        header('Location: /main');
    }
}