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
    public function dresses($category = null)
    {
        $obj = new ProductsModel();
        $data = $obj->get_products($category);
        $this->view->generate('productsView.php', ["products" => $data, "category" => $category]);
    }
}