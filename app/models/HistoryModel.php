<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:35
 */

namespace MyShop\models;

use MyShop\tables\Orders;
use Shop\core\Model;
use Shop\session\Session;
use Shop\exceptions\AuthException;

class HistoryModel extends Model
{
    public function orders_history()
    {
        if (!Session::cookieExists())
        {
            throw new AuthException('User is not authorized', '401');
        }
        Session::start();
        $user_id = $_SESSION['user_id'];
        $obj = new Orders();
        $data['orders'] = $obj->orders_history($user_id);
        return $data;
    }
}