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
        $controllerName = 'Main';
        //$action_name = 'defaultAction';
/*
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
        }*/

        $route = trim($_SERVER['REQUEST_URI'], '/');
        $route = explode('/', $route);

        /*$router = array();
        for ($i = 0; $i < 2; $i++) {
            $router[$i] = array_shift($route);
        }*/

        if (!empty($route[0])) {
            $controllerName = array_shift($route);
        }
        $class_name = 'MyShop\\controllers\\' . ucfirst($controllerName) . 'Controller';
        $file = __DIR__ . '/controllers/' . ucfirst($controllerName) . 'Controller.php';
        if (file_exists($file)) {
            $controller = new $class_name();
        } else {
            Router::page404();
        }
        if (!empty($route[0])) {
            $actionName = array_shift($route);
        } else {
            $actionName = 'action_index';
        }
        $controller->$actionName();
        var_dump($controllerName);
        var_dump($actionName);

        /*$params = array(
            'get'   => array(),
            'post'  => array()
        );*/

        if (!empty($route[0])) {
            $params = array();
            for ($i = 0; count($route) > 0; $i++) {
                if ($i % 2 == 0) {
                    $paramName = array_shift($route);
                    continue;
                } else {
                    $params[$paramName] = array_shift($route);
                }
            }
            var_dump($params);
        }

        //$params['post'] = $_POST;


    }


    public static function page404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:/app/views/error404View.php');
    }


}