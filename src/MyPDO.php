<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 16.07.18
 * Time: 12:32
 */

namespace Shop;
use \PDO;

class MyPDO
{
    private $dbc;
    public function __construct()
    {
        $dbc = new PDO('mysql:host=localhost;dbname=kartyshova_db','kartyshova','phpuser!');
        $this->dbc = $dbc;
    }
    public function get_record_by_id($table_name, $id)
    {
        $result = $this->dbc->query('SELECT * FROM ' . $table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function get_all_records($table_name)
    {
        $result = $this->dbc->query('SELECT * FROM '. $table_name);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function add_record($table_name, $field_val)
    {
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
        $this->dbc->query($sql);

    }
    public function get_id_by_value($table_name, $column, $value)
    {
        return $this->dbc->query('SELECT `id` FROM ' . $table_name . ' WHERE ' . $column.'= ' . $value);
    }
    public function get_last_record_id($table_name)
    {
        $last_rec = $this->dbc->query('SELECT * FROM ' . $table_name . ' WHERE   id = (SELECT MAX(id)  FROM ' . $table_name . ')');
        $last_rec = $last_rec->fetchAll(PDO::FETCH_CLASS);
        foreach ($last_rec as $value){
            $result = $value;
        }
        $result = $result->id;
        return $result;
    }
    public function get_column_by_id($table_name, $column, $id)
    {
        $result = $this->dbc->query('SELECT `' . $column. '`` FROM ' . $table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function my_query ($query)
    {
        $result = $this->dbc->query($query);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}