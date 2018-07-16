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
use MyShop\Application;
$obj = new Application();
Application::run();

// create a log channel
//$log = new Logger('name');
//$log->pushHandler(new StreamHandler('logs/your.log', Logger::WARNING));

// add records to the log
//$log->warning('Foo');
//$log->error('Bar');

//$a = new UserController();
//$b = new UserModel();
//$a->usrCont();
//$b->usr();
//function __autoload(){}

