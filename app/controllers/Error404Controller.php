<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:43
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
class Error404Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->generate('error404View.php');
    }
}