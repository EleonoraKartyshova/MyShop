<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 15:36
 */

namespace MyShop\controllers;
use MyShop\core\Controller;
use MyShop\core\authentication\Authentication;
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
        if (Authentication::is_auth()){
            $data['auth'] = true;
            $data['login'] = $_SESSION['login'];
        }else{
            $data['auth'] = false;
        }
        return $data;

    }
}
