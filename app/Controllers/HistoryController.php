<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:36
 */
namespace MyShop\Controllers;

use MyShop\Models\HistoryModel;
use MyShop\Service\Authentication;
use Shop\Exceptions\AuthException;
use Shop\Logs\ShopLogger;

class HistoryController extends FrontController
{
    public function action_index()
    {
        try {
            if (!Authentication::is_auth()) {
                throw new AuthException('User is not authorized', '401');
            }
            $obj = new HistoryModel();
            $user_id = Authentication::get_user_id();
            $data = $obj->orders_history($user_id);
            $this->view->generate('ordersHistoryView.php', $data);
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
}