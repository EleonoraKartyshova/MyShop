<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 30.07.18
 * Time: 23:31
 */

namespace Shop;

use \PDO;

class Singleton
{
    private static $instance = null;
    private static $db_host = 'localhost';
    private static $db_name = 'myshop';
    private static $db_user = 'root';
    private static $db_pass = 'elya12345';

    private function __construct ()
    {
        self::$instance = new PDO(
            'mysql:host=' . self::$db_host . ';dbname=' . self::$db_name, self::$db_user, self::$db_pass);
    }

    private function __clone () {}
    private function __wakeup () {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            new self();
        }

        return self::$instance;
    }
}