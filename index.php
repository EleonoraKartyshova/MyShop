<?php

$debug = true;

if ($debug) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//require 'header.php';
//require 'products.php';
//require 'footer.php';
require_once __DIR__.'/vendor/autoload.php';
use MyShop\controllers\UserController;
use MyShop\models\UserModel;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('logs/your.log', Logger::WARNING));

// add records to the log
//$log->warning('Foo');
//$log->error('Bar');

$obj = new \MyShop\Application();
\MyShop\Application::run();

//$a = new UserController();
//$b = new UserModel();
//$a->usrCont();
//$b->usr();
//function __autoload(){}

