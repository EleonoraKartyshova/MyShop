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
    public function action_index($data)
    {
        $this->view->generate('errorView.php', ['error' => $data]);
    }
}