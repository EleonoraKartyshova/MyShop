<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 24.07.18
 * Time: 15:55
 */

namespace MyShop\Controllers;

use Shop\Core\Controller;

class ErrorController extends FrontController
{
    public $page_number = 5;

    public function action_index($error_number)
    {
        $this->view->generate('errorView.php', ['error' => $error_number, "page_number" => $this->page_number]);
    }
}