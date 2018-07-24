<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:45
 */
namespace MyShop\controllers;

use Shop\core\Controller;
use MyShop\models\ProductModel;
use Shop\exceptions\AuthException;
use Shop\logs\ShopLogger;

class ProductController extends FrontController
{
    public function get_product($id)
    {
        $obj = new ProductModel();
        $data = $obj->get_product($id);
        $this->view->generate('productView.php', $data);
    }
    public function add_review($id)
    {
        $obj = new ProductModel();
        try {
            $obj->add_review($id);
            $data = $obj->get_product($id);
            $this->view->generate('productView.php', $data);
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }

    }
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}