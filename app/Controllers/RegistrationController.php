<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 19.07.18
 * Time: 11:48
 */

namespace MyShop\Controllers;
use Shop\Core\Authentication\Authentication;
use Shop\Core\Controller;
use MyShop\Models\RegistrationModel;

class RegistrationController extends FrontController
{
    public function reg()
    {
        $new_login = $_POST['login'];
        $new_password = $_POST['password'];
        $new_phone_number = $_POST['phone_number'];
        $obj = new RegistrationModel();
        $data_auth = $obj->reg($new_login, $new_password, $new_phone_number);
        if (!empty($data_auth))
        {
            $this->view->generate('registrationView.php', ["data_auth" => $data_auth]);
        } else {
            $this->view->generate('registrationView.php');
        }
    }
}