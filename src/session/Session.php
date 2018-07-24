<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 06.07.18
 * Time: 18:03
 */
namespace Shop\session;

use Shop\exceptions\SessException;

class Session
{
    public  function __construct()
    {
        session_save_path('/home/NIX/phpuser/test/project3/src/session');
    }
    public static function setName($name)
    {
        if (self::sessionExists()) {
            throw new SessException ('Session already started');
        }
        session_name($name);
    }
    public static function getName()
    {
        return session_name();
    }
    public static function getId()
    {
        return session_id();
    }
    public static function setId($id)
    {
        session_id($id);
    }
    public static function cookieExists()
    {
        if (isset($_COOKIE[self::getName()]))
        {
            return true;
        } else {
            return false;
        }

    }
    public static function sessionExists()
    {
        if (!empty($_SESSION))
        {
            return true;
        } else {
            return false;
        }
    }
    public static function start()
    {
        if (!self::sessionExists())
        {
            session_start();
            //setcookie(session_name(),'', time()+1440, '/' );
        }
    }
    public static function destroy()
    {
        session_destroy();
    }
    public static function setSavePath($path)
    {
        session_save_path($path);
    }
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function get()
    {
        return $_SESSION;
    }
    public static function contains($key)
    {
        if (isset($_SESSION[$key])) {
            return true;
        } else {
            return false;
        }
    }
    public static function delete($key)
    {
        unset($_SESSION[$key]);
    }
}