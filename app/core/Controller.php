<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 10:14
 */
namespace MyShop\core;
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function defaultAction()
    {
        echo "Вызван action по умолчанию";
    }
}