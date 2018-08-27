<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 23.07.18
 * Time: 12:35
 */

namespace MyShop\Models;

use MyShop\Tables\Orders;
use Shop\Core\Model;
use Shop\Session\Session;
use Shop\Exceptions\AuthException;

class HistoryModel extends Model
{
    public function orders_history()
    {
        if (!Session::cookieExists()) {
            throw new AuthException('User is not authorized', '401');
        }
        Session::start();
        $user_id = Session::get_data('user_id');
        $obj = new Orders();
        $data['orders'] = $obj->orders_history($user_id);
        return $data;
    }
}