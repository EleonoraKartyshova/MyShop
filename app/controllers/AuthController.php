<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 16:14
 */

namespace MyShop\controllers;
use MyShop\core\authentication\Authentication;
use MyShop\core\Controller;
use MyShop\models\AuthModel;
class AuthController extends FrontController
{
    public function logout()
    {
        Authentication::logout();
    }
    public function auth()
    {
        $new_login = $_POST['login'];
        $new_password = $_POST['password'];
        $obj = new AuthModel();
        //$var = $obj->auth($new_login, $new_password);

        $data_auth = $obj->auth($new_login, $new_password);
        $this->view->generate('mainView.php', ["data_auth" => $data_auth]);
    }
//    public function is_auth()
//    {
//        return Authentication::is_auth();
//    }
    public function get_login()
    {
        return Authentication::get_login();
    }
    public function get_all_records()
    {
        $obj = new AuthModel();
        return $obj->get_all_records();
    }
}