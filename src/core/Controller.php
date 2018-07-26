<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 10:14
 */
namespace Shop\core;
use Shop\core\View;

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }
}