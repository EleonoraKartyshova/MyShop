<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 11:35
 */

namespace Shop;

use MyShop\controllers\Error404Controller;
use Shop\exceptions\RouterException;
//use MyShop\controllers\MainController;

class Application
{
    public static function run()
    {
        try{
            Router::route();
        } catch(RouterException $e){
            $controller = new Error404Controller();
            $controller->action_index();
        }
    }
}