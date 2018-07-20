<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 10.07.18
 * Time: 18:17
 */
namespace Shop\core;

use \PDO;
use Shop\MyPDO;

class Model
{
    protected $db_connect;
    public function __construct()
    {
        $this->db_connect = new MyPDO();
    }
}