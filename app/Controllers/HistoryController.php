<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:36
 */
namespace MyShop\Controllers;

use MyShop\Models\HistoryModel;
use Shop\Exceptions\AuthException;
use Shop\logs\ShopLogger;

class HistoryController extends FrontController
{
    public function action_index()
    {
        $obj = new HistoryModel();
        try {
            $data = $obj->orders_history();
            $this->view->generate('ordersHistoryView.php', $data);
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
}