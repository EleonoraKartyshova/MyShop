<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 10.07.18
 * Time: 18:17
 */
namespace MyShop\core;
use \PDO;
use MyShop\MyPDO;
class Model extends MyPDO
{
    public function get_record_by_id($table_name, $id)
    {
        $obj = new MyPDO();
        $result = $obj->get_dbc()->query('SELECT * FROM ' . $table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function get_all_records($table_name)
    {
        $obj = new MyPDO();
        $result = $obj->get_dbc()->query('SELECT * FROM '. $table_name);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}