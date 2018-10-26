<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:45
 */
namespace MyShop\Controllers;

use Shop\Core\Controller;
use MyShop\Models\ProductModel;
use Shop\Exceptions\AuthException;
use Shop\Logs\ShopLogger;
use MyShop\Service\Authentication;
use MyShop\Service\ProtectionFromResubmitForm;
use Shop\Validator;

class ProductController extends FrontController
{
    public function get_product($params)
    {
        if (Authentication::is_auth()) {
            ProtectionFromResubmitForm::set_protective_code();
        }
        $obj = new ProductModel();
        $data = $obj->get_product($params['id']);
        $this->view->generate('productView.php', $data);
    }
    public function add_review($params)
    {
        try {
            if (!Authentication::is_auth()) {
                throw new AuthException('User is not authorized', '4013');
            }
            if (Validator::text_review($_POST["text_review"])) {
                $obj = new ProductModel();
                $user_id = Authentication::get_user_id();
                $text_review = $_POST["text_review"];
                $post_review_code = $_POST["code"];
                $session_review_code = ProtectionFromResubmitForm::get_protective_code();
                $obj->add_review($params['id'], $user_id, $text_review, $post_review_code, $session_review_code);
                ProtectionFromResubmitForm::set_protective_code();
                $data = $obj->get_product($params['id']);
                $this->view->generate('productView.php', $data);
            }
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }
    }
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}