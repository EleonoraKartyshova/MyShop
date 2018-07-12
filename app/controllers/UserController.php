<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 12:51
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->generate('userView.php');
    }
}