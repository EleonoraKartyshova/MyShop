<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 18.07.18
 * Time: 15:36
 */

namespace MyShop\Controllers;

use MyShop\Service\ProductsFilter;
use Shop\Core\Controller;
use MyShop\Service\Authentication;
use MyShop\Models\FrontModel;
use Shop\Core\View;

class FrontController extends Controller
{
    public  function __construct()
    {
        parent::__construct();
        if (isset($this->page_number) && $this->page_number <> 2) {
            ProductsFilter::clear_filter();
        }
        $obj = new FrontModel();
        $country = $obj->get_real_ip_addr();
        $this->view->data["country"] = $country;
        $this->view->data["data_auth"] = self::is_auth();
    }
    public static function is_auth()
    {
        $data = [];
        if (Authentication::is_auth()) {
            $data['auth'] = true;
            $data['login'] = Authentication::get_login();
            $data['role'] = Authentication::get_role();
        } else {
            $data['auth'] = false;
            $data['login'] = false;
            $data['role'] = false;
        }
        return $data;
    }
}
