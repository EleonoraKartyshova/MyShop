<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 15:36
 */

namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Service\Authentication;
use Shop\Core\View;

class FrontController extends Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->view->data["data_auth"] = self::is_auth();
    }
    public static function is_auth()
    {
        $data = [];
        if (Authentication::is_auth()) {
            $data['auth'] = true;
            $data['login'] = Authentication::get_login();
        } else {
            $data['auth'] = false;
            $data['login'] = false;
        }
        return $data;
    }
}
