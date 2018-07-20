<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 11:48
 */

namespace MyShop\controllers;
use Shop\core\authentication\Authentication;
use Shop\core\Controller;
use MyShop\models\RegistrationModel;

class RegistrationController extends FrontController
{
    public function reg()
    {
        $new_login = $_POST['login'];
        $new_password = $_POST['password'];
        $new_phone_number = $_POST['phone_number'];
        $obj = new RegistrationModel();
        //$var = $obj->auth($new_login, $new_password);

        $data_auth = $obj->reg($new_login, $new_password, $new_phone_number);
        if (!empty($data_auth))
        {
            $this->view->generate('registrationView.php', ["data_auth" => $data_auth]);
        }else{
            $this->view->generate('registrationView.php');
        }
    }
}