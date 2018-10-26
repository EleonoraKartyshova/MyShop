<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 01.10.18
 * Time: 20:34
 */

namespace Shop;


class QueryBuilder
{
    public static function select($table_name, $select_what = '*')
    {
        if (is_array($select_what)) {
            $sql_start = 'SELECT ';
            $sql_end = ' FROM ' . $table_name;
            foreach ($select_what as $item) {
                $sql_start = $sql_start . $item . ', ';
            }
            $sql_start = substr($sql_start, 0 , -2);
            $sql = $sql_start . $sql_end;
        } else {
            $sql = 'SELECT ' . $select_what . ' FROM ' . $table_name;
        }
        return $sql;
    }
    public static function update($table_name, $changes)
    {
        $sql = 'UPDATE ' . $table_name . ' SET ';
        foreach ($changes as $field => $value) {
            $sql = $sql . $field." = '". $value . "', ";
        }
        $sql = substr($sql, 0, -2);
        return $sql;
    }
    public static function delete($table_name)
    {
        $sql = 'DELETE FROM ' . $table_name;
        return $sql;
    }
    public static function insert($table_name, $fields, $values)
    {
        if (is_array($fields)) {
            $sql_fields = 'INSERT INTO '. $table_name . ' (';
            $sql_values = ') VALUES (';
            $sql_end = ')';
            $count = count($fields);
            for ($i = 0; $i < $count; $i++) {
                $sql_fields = $sql_fields . $fields[$i] . ', ';
                $sql_values = $sql_values . "'" . $values[$i] . "', ";
            }
            $sql_fields = substr($sql_fields, 0 , -2);
            $sql_values = substr($sql_values, 0 , -2);
            $sql = $sql_fields . $sql_values . $sql_end;
        } else {
            $sql = 'INSERT INTO '. $table_name . ' (' . $fields . ") VALUES ('" . $values . "')";
        }
        return $sql;
    }
    public static function inner_join($table_name)
    {
        $sql = $sql = ' INNER JOIN ' . $table_name;
        return $sql;
    }
    public static function on($field1 = null, $field2 = null, $sql_logical_operator = 'AND')
    {
        $sql = '';
        if ($field1) {
            if (is_array($field1)) {
                $sql = " ON ";
                $count = count($field1);
                for ($i = 0; $i < $count; $i++) {
                    $sql = $sql . $field1[$i] . " = ". $field2[$i] . " ". $sql_logical_operator . " ";
                }
                $sql = substr($sql, 0, -4);
            } else {
                $sql = ' ON ' . $field1." = ". $field2;
            }
        }
        return $sql;
    }
    public static function where($field = null, $value = null, $sql_start_with_where = true, $sql_logical_operator = 'AND', $sql_operand = '=')
    {
        $sql = '';
        if ($value) {
            if ($sql_start_with_where) {
                $sql = " WHERE (";
            } else {
                $sql = " AND (";
            }
            if (is_array($field)) {
                $count = count($field);
                for ($i = 0; $i < $count; $i++) {
                    $sql = $sql . $field[$i] ." ". $sql_operand . " '". $value[$i] ."' " . $sql_logical_operator . " ";
                }
                $sql = substr($sql, 0, -4);
                $sql = $sql . ")";
            } else {
                $sql = $sql . $field ." ". $sql_operand . " '". $value ."')";
            }
        }
        return $sql;
    }
    public static function like($field = null, $value = null, $sql_start_with_where = true, $sql_logical_operator = 'AND')
    {
        $sql = '';
        if ($value) {
            if ($sql_start_with_where) {
                $sql_start = " WHERE (";
            } else {
                $sql_start = " AND (";
            }
            $sql_end = "";
            $sql_field = "(UPPER (" . $field . ") LIKE UPPER ('%";

            foreach ($value as $key_word) {
                $sql_end  = $sql_end . $sql_field . $key_word . "%')) " . $sql_logical_operator . " ";
            }
            $sql_end = substr($sql_end, 0, -4);
            $sql = $sql_start . $sql_end . ")";
        }
        return $sql;
    }
    public static function limit($start = null, $range = null)
    {
        $sql = '';
        if ($range) {
            $sql = ' LIMIT ' . $start .', '. $range;
        }
        return $sql;
    }
    public static function order_by($table_name, $field = null, $sorting_method = null)
    {
        $sql = '';
        if ($field) {
            $sql = ' ORDER BY ' . $table_name . '.'. $field . ' ' .$sorting_method;
        }
        return $sql;
    }
}