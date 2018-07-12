<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 09.07.18
 * Time: 18:16
 */
namespace MyShop\logs;
use \Monolog\Logger;

class ShopLogger extends Logger
{
    //private DEBUG = 100;
    //private INFO = 200;
    //private NOTICE = 250;
    //private WARNING = 300;

    private $handle, $dateFormat;
    public function __construct($file, $mode = "a") {
        $this->handle = fopen($file, $mode);
        $this->dateFormat = "d/M/Y H:i:s";
    }
    public function dateFormat($format) {
        $this->dateFormat = $format;
    }
    public function getDateFormat() {
        return $this->dateFormat;
    }
    public function log($entries) {
        if(is_string($entries)) {
            fwrite($this->handle, "Error: [" . date($this->dateFormat) . "] " . $entries . "\n");
        } else {
            foreach($entries as $value) {
                fwrite($this->handle, "Error: [" . date($this->dateFormat) . "] " . $value . "\n");
            }
        }
    }
}