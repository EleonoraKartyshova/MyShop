<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
class ProductsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->generate('productsView.php');
    }
}