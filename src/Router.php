<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 06.07.18
 * Time: 14:01
 */

namespace Shop;

use Shop\Exceptions\RouterException;

class Router
{
    public static function route()
    {
        $controllerName = 'main';
        $route = trim($_SERVER['REQUEST_URI'], '/');
        $route = explode('/', $route);
        if (!empty($route[0])) {
            $controllerName = array_shift($route);
        }
        $class_name = 'MyShop\\Controllers\\' . ucfirst($controllerName) . 'Controller';
        $file = '../app/Controllers/' . ucfirst($controllerName) . 'Controller.php';
        if (file_exists($file)) {
            $controller = new $class_name();
        } else {
            throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
        }
        if (!empty($route[0])) {
            $actionName = array_shift($route);
            if (!method_exists($controller, $actionName)) {
                throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
            }
        } else {
            $actionName = 'action_index';
        }
        $paramName = null;
        if (!empty($route[0])) {
            $params = [];
            for ($i = 0; count($route) > 0; $i++) {
                if ($i % 2 == 0) {
                    $paramName = array_shift($route);
                    continue;
                } else {
                    $params[$paramName] = array_shift($route);
                }
            }
        }
        if(!empty($params[$paramName])) {
            $controller->$actionName($params);
        } else {
            $controller->$actionName();
        }
    }
}