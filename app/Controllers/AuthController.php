<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 13.07.18
 * Time: 16:14
 */
namespace MyShop\Controllers;

use MyShop\Service\Authentication;
use MyShop\Models\AuthModel;
use Shop\Exceptions\AuthException;
use Shop\Validator;

class AuthController extends FrontController
{
    public function logout()
    {
        Authentication::logout();
    }
    public function auth()
    {
        if (Validator::email($_POST['login']) && Validator::password($_POST['password'])) {
            $new_login = $_POST['login'];
            $new_password = $_POST['password'];
            $obj = new AuthModel();
            $data_auth = $obj->auth($new_login, $new_password);
            Authentication::auth($data_auth);
            $this->view->generate('mainView.php', ["data_auth" => $data_auth]);
        }
    }
}