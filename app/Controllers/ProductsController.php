<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Models\ProductsModel;
use MyShop\Controllers\FrontController;

class ProductsController extends FrontController
{
    public function action_index()
    {
        $obj = new ProductsModel();
        $data = $obj->get_products();
        $this->view->generate('productsView.php', ["products" => $data]);
    }
}