<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 16:14
 */
namespace MyShop\Controllers;

use Shop\Core\Authentication\Authentication;
use MyShop\Models\AuthModel;

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
}