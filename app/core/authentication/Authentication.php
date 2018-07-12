<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 17:03
 */
class Authentication
{
    private static $log = "eleonora";
    private static $pass = "1234";

    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public static function isAuth($login, $password)
    {
        if (self::valLog($login) && self::valPas($password) && $login == self::$log && $password == self::$pass) {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            return true;
        } else { return false;}
    }
    public static function auth()
    {
        session_start();
    }
    public static function getLogin()
    {
        return $_SESSION['login'];
    }
    public static function logout()
    {
        session_start();
        //$_SESSION=array();
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit;
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