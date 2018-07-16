<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:45
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\models\ProductModel;
class ProductController extends Controller
{
    public function get_product($id)
    {
        //var_dump($_GET);die;
        $obj = new ProductModel();
        //$param = Router::route();
//        $id = $param['id'];
        $data = $obj->get_rec_by_id($id);
        $this->view->generate('productView.php', $data);
    }
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}