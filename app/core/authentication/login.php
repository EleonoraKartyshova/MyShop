<?php
use MyShop\core\authentication\Authentication;
use MyShop\controllers\AuthController;
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'Authentication.php';
$obj = new Authentication($_REQUEST['login'], $_REQUEST['password']);
//Authentication::auth();

AuthController::auth($obj->login, $obj->password);



