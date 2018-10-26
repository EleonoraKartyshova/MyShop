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


class AdminController extends FrontController
{
    public $page_number = 6;

    public function admin_panel($add = false, $remove = false, $edit = false)
    {
        $obj = new AdminPanelModel();
        $data = $obj->get_products();
        $this->view->generate('adminPanelView.php', ["products" => $data, "add" => $add, "remove" => $remove, "edit" => $edit, "page_number" => $this->page_number]);
    }
    public function add()
    {
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
            $this->admin_panel($add, $remove, $edit);
        } else {
            ProtectionFromResubmitForm::set_protective_code();
            $this->view->generate('addProductView.php');
        }
    }
    public function remove($params)
    {
        $obj = new AdminPanelModel();
        if (isset($_POST['remove_product'])) {
            $obj->remove_product($params['id']);
            $add = false;
            $remove = true;
            $edit = false;
            $this->admin_panel($add, $remove, $edit);
        } else {
            $data = $obj->get_product($params['id']);
            $this->view->generate('removeProductView.php', ["product" => $data]);
        }
    }
    public function edit($params)
    {
        $obj = new AdminPanelModel();
        if (isset($_POST['edit_product'])) {
            $changes = $_POST;
            array_pop($changes);
            $obj->edit_product($params['id'], $changes);
            $add = false;
            $remove = false;
            $edit = true;
            $this->admin_panel($add, $remove, $edit);
        } else {
            $data = $obj->get_product($params['id']);
            $this->view->generate('editProductView.php', ["product" => $data]);
        }
    }
}