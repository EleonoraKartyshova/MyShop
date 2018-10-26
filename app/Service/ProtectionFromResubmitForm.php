<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 13.09.18
 * Time: 17:54
 */

namespace MyShop\Service;

use Shop\Session\Session;

class ProtectionFromResubmitForm
{
    public static function set_protective_code()
    {
        Session::set_data('code', md5(date('d.m.Y H:i:s').rand(1, 1000000)));
    }
    public static function get_protective_code()
    {
        return Session::get_data("code");
    }
}