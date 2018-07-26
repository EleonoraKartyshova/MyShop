<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\controllers;

use Shop\core\Controller;
use MyShop\models\ProductsModel;
use MyShop\controllers\FrontController;

class ProductsController extends FrontController
{
//    public function action_index()
//    {
//        $obj = new ProductsModel();
//        $data = $obj->get_all_rec();
//        $this->view->generate('productsView.php', ["products" => $data]);
//    }
    public function action_index()
    {
        $obj = new ProductsModel();
        $data = $obj->get_products();
        $this->view->generate('productsView.php', ["products" => $data]);
    }
}