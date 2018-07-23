<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:36
 */
namespace MyShop\controllers;

use MyShop\models\HistoryModel;
use Shop\exceptions\AuthException;

class HistoryController extends FrontController
{
    public function orders_history()
    {
        $obj = new HistoryModel();
        try {
            $data = $obj->orders_history();
            $this->view->generate('ordersHistoryView.php', $data);
        } catch (AuthException $e) {
            $this->view->generate('errorBasketOrderView.php');
        }
    }
}