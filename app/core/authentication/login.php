<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'Authentication.php';
$obj = new Authentication($_REQUEST['login'], $_REQUEST['password']);
Authentication::auth();
if (Authentication::isAuth($obj->login, $obj->password)) {
    header('Location: pages/welcome.php');

} else {
    header('Location: pages/err.php');

}
