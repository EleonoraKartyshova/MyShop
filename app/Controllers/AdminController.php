<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 26.10.18
 * Time: 16:15
 */

namespace MyShop\Controllers;

use MyShop\Models\AdminPanelModel;
use MyShop\Service\ProtectionFromResubmitForm;
use MyShop\Service\Authentication;
use Shop\Exceptions\RouterException;
use Shop\Logs\ShopLogger;


class AdminController extends FrontController
{
    public $page_number = 6;

    public function action_index($add = false, $remove = false, $edit = false)
    {
        try {
            if (!Authentication::get_role()) {
                throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
            }
            $obj = new AdminPanelModel();
            $data = $obj->get_products();
            $count = $obj->get_products_count();
            $this->view->generate('adminPanelView.php', ["products" => $data, "count" => $count, "add" => $add, "remove" => $remove, "edit" => $edit, "page_number" => $this->page_number]);
        } catch(RouterException $e){
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }

    }
    public function add()
    {
        try {
            if (!Authentication::get_role()) {
                throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
            }
            $obj = new AdminPanelModel();
            if (isset($_POST['add_product'])) {
                $post_code = $_POST["code"];
                $session_code = ProtectionFromResubmitForm::get_protective_code();
                ProtectionFromResubmitForm::set_protective_code();
                $product_data = $_POST;
                $obj->add_product($product_data, $post_code, $session_code);
                $add = true;
                $remove = false;
                $edit = false;
                $this->action_index($add, $remove, $edit);
            } else {
                ProtectionFromResubmitForm::set_protective_code();
                $this->view->generate('addProductView.php');
            }
        } catch(RouterException $e){
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }

    }
    public function remove($params)
    {
        try {
            if (!Authentication::get_role()) {
                throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
            }
            $obj = new AdminPanelModel();
            if (isset($_POST['remove_product'])) {
                $obj->remove_product($params['id']);
                $add = false;
                $remove = true;
                $edit = false;
                $this->action_index($add, $remove, $edit);
            } else {
                $data = $obj->get_product($params['id']);
                $this->view->generate('removeProductView.php', ["product" => $data]);
            }
        } catch(RouterException $e){
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }
    }
    public function edit($params)
    {
        try {
            if (!Authentication::get_role()) {
                throw new RouterException("Page not found : ". $_SERVER['REQUEST_URI'], '404');
            }
            $obj = new AdminPanelModel();
            if (isset($_POST['edit_product'])) {
                $changes = $_POST;
                array_pop($changes);
                $obj->edit_product($params['id'], $changes);
                $add = false;
                $remove = false;
                $edit = true;
                $this->action_index($add, $remove, $edit);
            } else {
                $data = $obj->get_product($params['id']);
                $this->view->generate('editProductView.php', ["product" => $data]);
            }
        } catch(RouterException $e){
            $controller = new ErrorController();
            $error_number = $e->getCode();
            $controller->action_index($error_number);
            ShopLogger::write_log($e->getMessage());
        }
    }
}