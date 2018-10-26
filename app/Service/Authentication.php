<?php
namespace MyShop\Service;

use Shop\Session\Session;

class Authentication
{
    public static function auth($data_auth)
    {
        if ($data_auth['auth']) {
            Session::set_data('login', $data_auth['login']);
            Session::set_data('password', $data_auth['password']);
            Session::set_data('user_id', $data_auth['user_id']);
            Session::set_data('role', $data_auth['role']);
            return true;
        } else {
            return false;
        }
    }
    public static function is_auth()
    {
        if(Session::get_data('login')) {
            return true;
        } else {
            return false;
        }
    }
    public static function get_login()
    {
        return Session::get_data('login');
    }
    public static function get_user_id()
    {
        return Session::get_data('user_id');
    }
    public static function get_role()
    {
        return Session::get_data('role');
    }
    public static function logout()
    {
        session_unset();
        session_destroy();
        setcookie(session_name(),'', -1, '/');
        header('Location: /main');
    }
}