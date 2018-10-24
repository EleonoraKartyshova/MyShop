<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 11:35
 */

namespace Shop;

use MyShop\Controllers\ErrorController;
use Shop\Logs\ShopLogger;
use Shop\Exceptions\RouterException;

class Application
{
    public static function run()
    {
        try{
            Router::route();
        } catch(RouterException $e){
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }
    }
}