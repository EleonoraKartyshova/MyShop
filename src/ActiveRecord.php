<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:27
 */

namespace Shop;

use \PDO;

class ActiveRecord
{
    protected $dbc;
    protected $table_name;

    public function __construct()
    {
        $dbc = new PDO('mysql:host=localhost;dbname=myshop','root','elya12345');
        $this->dbc = $dbc;
    }
    public function get_record_by_id($id)
    {
        $result = $this->dbc->query('SELECT * FROM ' . $this->table_name . ' WHERE id= ' . $id);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function get_all_records()
    {
        $result = $this->dbc->query('SELECT * FROM '. $this->table_name);
        $result = $result->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function get_fields()
    {
        $fields = get_class_vars(get_class($this));
        $fields = array_keys($fields);
        $fields = array_slice( $fields, 3);
        array_pop($fields);
        array_pop($fields);
        return $fields;
    }
    public function add_record()
    {
        $sql_fields = 'INSERT INTO '. $this->table_name . ' (';
        $sql_values = ') VALUES ' . '(';
        $sql_end = ')';
        $fields = $this->get_fields();
        foreach($fields as $field)
        {
            $sql_fields = $sql_fields . $field . ', ';

            $sql_values = $sql_values . "'" . $this->$field . "', ";
        }
        $sql_fields = substr($sql_fields, 0 , -2);
        $sql_values = substr($sql_values, 0 , -2);
        $sql = $sql_fields . $sql_values . $sql_end;
        $this->dbc->query($sql);
    }
    public function get_id_by_value($column, $value)
    {
        return $this->dbc->query('SELECT `id` FROM ' . $this->table_name . ' WHERE ' . $column.'= ' . $value);
    }
    public function get_last_record_id()
    {
        $last_rec = $this->dbc->query('SELECT * FROM ' . $this->table_name . ' WHERE   id = (SELECT MAX(id)  FROM ' . $this->table_name . ')');
        $last_rec = $last_rec->fetchAll(PDO::FETCH_CLASS);
        foreach ($last_rec as $value){
            $result = $value;
        }
        $result = $result->id;
        return $result;
    }
    public function get_column_by_id($column, $id)
    {
        $result = $this->dbc->query('SELECT `' . $column. '`` FROM ' . $this->table_name . ' WHERE id= ' . $id);
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