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

class HistoryModel extends Model
{
    public function orders_history($user_id)
    {
        $obj = new Orders();
        $data = $obj->orders_history($user_id);
        return $data;
    }
}