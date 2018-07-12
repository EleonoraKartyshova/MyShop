<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 06.07.18
 * Time: 14:01
 */
namespace MyShop;
class Router
{
    public static function route()
    {
        $controller_name = 'Main';
        //$action_name = 'defaultAction';

        $toExplode = explode('?', $_SERVER['REQUEST_URI']);
        $route = explode('/', $toExplode[0]);
        //$routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($route[1])) {
            $controller_name = $route[1];
        }
//        if (!empty($route[2]) )
//        {
//            $action_name = $route[2];
//        }
        $class_name = 'MyShop\\controllers\\' . ucfirst($controller_name) . 'Controller';

       // $action = $action_name;
        $file = __DIR__.'/controllers/'.ucfirst($controller_name) . 'Controller.php';

        if(file_exists($file))
        {
           $controller = new $class_name;
        }
        else
        {
            Router::page404();
        }

    }


    public static function page404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:/app/views/error404View.php');
    }


}