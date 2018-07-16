<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\models\ProductsModel;

class ProductsController extends Controller
{
    public function action_index()
    {
        $obj = new ProductsModel();
        $data = $obj->get_all_rec();
//        var_dump($data);die;
        $this->view->generate('productsView.php', $data);
    }
}