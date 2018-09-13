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

class ProductController extends FrontController
{
    public function get_product($id)
    {
        if (Authentication::is_auth()) {
            ProtectionFromResubmitForm::set_protective_code();
        }
        $obj = new ProductModel();
        $data = $obj->get_product($id);
        $this->view->generate('productView.php', $data);
    }
    public function add_review($id)
    {
        try {
            if (!Authentication::is_auth()) {
                throw new AuthException('User is not authorized', '4013');
            }
            $obj = new ProductModel();
            $user_id = Authentication::get_user_id();
            $text_review = $_POST["text_review"];
            $post_review_code = $_POST["review"];
            $session_review_code = ProtectionFromResubmitForm::get_protective_code();
            $obj->add_review($id, $user_id, $text_review, $post_review_code, $session_review_code);
            ProtectionFromResubmitForm::set_protective_code();
            $data = $obj->get_product($id);
            $this->view->generate('productView.php', $data);
        } catch (AuthException $e) {
            $controller = new ErrorController();
            $data = $e->getCode();
            $controller->action_index($data);
            ShopLogger::write_log($e->getMessage());
        }
    }
    public function action_index()
    {
        $this->view->generate('mainView.php');
    }
}