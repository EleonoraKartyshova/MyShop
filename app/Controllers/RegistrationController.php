<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 11:48
 */

namespace MyShop\Controllers;
use MyShop\Service\Authentication;
use Shop\Core\Controller;
use MyShop\Models\RegistrationModel;
use Shop\Validator;
use MyShop\Controllers\ErrorController;

class RegistrationController extends FrontController
{
    public function reg()
    {
        if (Validator::email($_POST['login']) && Validator::password($_POST['password']) && Validator::phone_number($_POST['phone_number'])) {
            $new_login = $_POST['login'];
            $new_password = $_POST['password'];
            $new_phone_number = $_POST['phone_number'];
            $obj = new RegistrationModel();
            $data_auth = $obj->reg($new_login, $new_password, $new_phone_number);
            if (!empty($data_auth)) {
                Authentication::auth($data_auth);
                $this->view->generate('registrationView.php', ["data_auth" => $data_auth]);
            } else {
                $error_number = '4014';
                $controller = new ErrorController();
                $controller->action_index($error_number);
            }
        } else {
            $error_number = '4011';
            $controller = new ErrorController();
            $controller->action_index($error_number);
        }
    }
}