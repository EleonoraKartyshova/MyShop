<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 11:35
 */

namespace MyShop;


class Application
{
    public static function run()
    {
        Router::route();
    }
}