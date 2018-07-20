<?php
namespace Shop\core\authentication;

use Shop\session\Session;
class Authentication
{
    public static function auth($new_login, $new_password, $login, $password)
    {
        if ($new_login == $login && $new_password == $password) {
            //session_start();
            //$_SESSION['login'] = $new_login;
            //$_SESSION['password'] = $new_password;
            //header('Location: /main');
            return true;

        } else {
            //header('Location: /main');
            return false;

        }
    }
    public static function is_auth()
    {
        //var_dump(session_name());
        if(Session::cookieExists()){
            Session::start();
            return true;
        }else{
            return false;
        }
    }
    public static function get_login()
    {
        return $_SESSION['login'];
        //else{
            //header('Location: ../index.php');
        //}
    }
    public static function logout()
    {
        //session_start();
        session_unset();
        session_destroy();
        //var_dump(session_name());
        setcookie(session_name(),'', -1, '/');
        //$_SESSION=array();
        //var_dump($_COOKIE);
        //var_dump($_SESSION);
        header('Location: /main');
    }



}