<?php
namespace MyShop\core\authentication;
class Authentication
{
    private static $log = "el@el";
    private static $pass = "1234";




    public static function auth($login, $password)
    {
        if (self::valLog($login) && self::valPas($password) && $login == self::$log && $password == self::$pass) {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            header('Location: /main');

        } else {
            header('Location: /main');

        }
    }
    public static function is_auth()
    {
        //var_dump(session_name());
        if(isset($_COOKIE[session_name()])){
            session_start();
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
    public static function valLog($login)
    {
        if(!is_string($login)){
            echo "Вы ввели не строку!";
        } else {
            return true;
        }
    }
    public static function valPas($password){
        if(!is_numeric($password)){
            echo "Вы ввели не целое число!";
        } else {
            return true;
        }
    }


}