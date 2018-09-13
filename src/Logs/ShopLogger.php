<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 18:16
 */
namespace Shop\Logs;

//use \Monolog\Logger;

class ShopLogger
{
    public static $file = __DIR__ .'/my.log';

    public static function write_log($error_message)
    {
        $log_text = date("d/M/Y H:i:s") . " " . $error_message . "\n";
        file_put_contents(ShopLogger::$file, $log_text, FILE_APPEND);
    }
}