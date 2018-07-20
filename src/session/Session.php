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
    public static function setName($name) {
        if (self::sessionExists()) {
            throw new SessException ('Session already started');
        }
        session_name($name);
    }
    public static function getName()
    {
        return session_name();
    }
    public static function getId() {}
    public static function setId($id) {}
    public static function cookieExists() {
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
    public static function start() {
        if (!self::sessionExists())
        {
            session_start();
            //setcookie(session_name(),'', time()+1440, '/' );
        }
    }
    public static function destroy() {
        session_destroy();
    }
    public static function setSavePath($path) {}
    public static function set($value) {}
    public static function get() {}
    public static function contains($key) {}
    public static function delete($key) {}
}