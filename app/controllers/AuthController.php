<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 16:14
 */
namespace MyShop\controllers;

use Shop\core\authentication\Authentication;
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
        $data_auth = $obj->auth($new_login, $new_password);
        $this->view->generate('mainView.php', ["data_auth" => $data_auth]);
    }
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