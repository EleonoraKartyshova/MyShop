<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:44
 */
namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\models\BasketModel;
class BasketController extends FrontController
{
    public function action_index()
    {
        //$data = $_SESSION['basket'];
        $this->view->generate('basketView.php');
    }
    public function add_to_basket($id)
    {
        $obj = new BasketModel();
        $data = $obj->add_to_basket($id);
        $data2 = $obj->order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
    }
    public function basket()
    {
        $obj = new BasketModel();
        $data = $obj->basket();
        $data2 = $obj->order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
    }
    public function delete_from_basket($id)
    {
        $obj = new BasketModel();
        $data = $obj->delete_from_basket($id);
        $data2 = $obj->order_price($data);
        $this->view->generate('basketView.php', ["basket" => $data, "order_price" => $data2]);
    }
}