<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 11:35
 */

namespace Shop;

use MyShop\controllers\ErrorController;
use Shop\logs\ShopLogger;
use Shop\exceptions\RouterException;

class Application
{
    public static function run()
    {
        try{
            Router::route();
        } catch(RouterException $e){
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
}