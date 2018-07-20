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
    public function add_record($table_name, $field_val)
    {
        $obj = new MyPDO();
        $sql_fields = 'INSERT INTO '. $table_name . ' (';
        $sql_values = ') VALUES ' . '(';
        $sql_end = ')';
        foreach($field_val as $field=>$value)
        {
            $sql_fields =  $sql_fields . $field . ', ';

            $sql_values = $sql_values . "'" . $value . "', ";
        }
        $sql_fields = substr($sql_fields, 0 , -2);
        $sql_values = substr($sql_values, 0 , -2);
        $sql = $sql_fields . $sql_values . $sql_end;
        $obj->get_dbc()->query($sql);

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
        $last_rec = $last_rec->fetchAll(PDO::FETCH_CLASS);
        foreach ($last_rec as $value){
            $result = $value;
        }
        $result = $result->id;
        return $result;
    }
    public function get_column_by_id($table_name, $column, $id)
    {
        $obj = new MyPDO();
        $result = $obj->get_dbc()->query('SELECT `' . $column. '`` FROM ' . $table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function my_query ($query)
    {
        $obj = new MyPDO();
        $result = $obj->get_dbc()->query($query);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}