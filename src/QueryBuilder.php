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
    public static function select($table_name, $select = '*')
    {
        $sql = 'SELECT ' . $select . ' FROM ' . $table_name;
        return $sql;
    }
    public static function where($field = null, $value = null)
    {
        $sql = '';
        if ($value) {
            $sql = ' WHERE ' . $field." = '". $value ."'";
        }
        return $sql;
    }
    public static function like($field = null, $value = null, $sql_start_with_where = true, $sql_logical_operator = 'AND')
    {
        $sql = '';
        if ($value) {
            if ($sql_start_with_where) {
                $sql_start = " WHERE ";
            } else {
                $sql_start = " AND ";
            }
            $sql_end = "";
            $sql_field = "(UPPER (" . $field . ") LIKE UPPER ('%";

            foreach ($value as $key_word) {
                $sql_end  = $sql_end . $sql_field . $key_word . "%')) " . $sql_logical_operator . " ";
            }
            $sql_end = substr($sql_end, 0, -4);
            $sql = $sql_start . $sql_end;
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