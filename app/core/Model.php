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
    public function add_record($table_name, $col1, $col2 = null , $col3 = null , $col4 = null , $col5 = null , $val1, $val2 = null, $val3 = null, $val4 = null, $val5 = null)
    {
        $obj = new MyPDO();
        var_dump('INSERT INTO '. $table_name . ' (' . $col1 . ', '. $col2 . ', '. $col3 . ', '. $col4 . ', '. $col5 .  ') VALUES ' . '(' . $val1 .', '. $val2 .', '. $val3 .', '. $val4 .', '. $val5 . ')');
        $obj->get_dbc()->query('INSERT INTO '. $table_name . ' (' . $col1 . ', '. $col2 . ', '. $col3 . ', '. $col4 . ', '. $col5 .  ') VALUES ' . '(' . $val1 .', '. $val2 .', '. $val3 .', '. $val4 .', '. $val5 . ')');
    }
    public function get_id_by_value($table_name, $column, $value)
    {
        $obj = new MyPDO();
        return $obj->get_dbc()->query('SELECT `id` FROM ' . $table_name . ' WHERE ' . $column.'= ' . $value);
    }
    public function get_last_record_id($table_name)
    {
        $obj = new MyPDO();
        $last_rec = $obj->get_dbc()->query('SELECT * FROM ' . $table_name . ' WHERE   id = (SELECT MAX(id)  FROM ' . $table_name . ')');
//         var_dump($last_rec);die;
        $last_rec = $last_rec->fetchAll(PDO::FETCH_CLASS);
//        var_dump($last_rec);die;
        foreach ($last_rec as $value){
            $result = $value;
        }
//        var_dump($result);die;
        $result = $result->id;
//        var_dump($result);die;
        return $result;
    }
    public function get_column_by_id($table_name, $column, $id)
    {
        $obj = new MyPDO();
        $result = $obj->get_dbc()->query('SELECT `' . $column. '`` FROM ' . $table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}