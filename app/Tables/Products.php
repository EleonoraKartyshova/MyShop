<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:33
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;
use Shop\QueryBuilder;

class Products extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'products';
    public $id;
    public $category;
    public $title;
    public $picture;
    public $quantity_in_stock;
    public $style;
    public $features;
    public $fabric_material;
    public $length;
    public $color;
    public $manufacturer_country;
    public $description;
    public $quantity_sold;
    public $created_at;
    public $updated_at;

    public function update_quantity_of_goods_sold($product_id)
    {
        $sql = 'UPDATE ' . $this->table_name . ' SET quantity_sold=quantity_sold + 1 WHERE id='.$product_id;
        $this->my_query($sql);
    }

//    public function search_products($search_query)
//    {
//        $sql = 'SELECT * FROM '. $this->table_name .
//            " WHERE MATCH (category, title, style, features, fabric_material, length, color, description) AGAINST ('". $search_query ."')";
//        $sql = 'SELECT * FROM '. $this->table_name .
//            " WHERE MATCH (title) AGAINST ('". $search_query ."')";
//        return $this->my_query($sql);
//    }

    public function products(
        $where_field,
        $where_value,
        $like_field,
        $like_value,
        $order_by_field,
        $order_by_sorting_method,
        $start,
        $range)
    {
        $sql_start_with_where = true;
        if ($where_value) {
            $sql_start_with_where = false;
        }
        $sql = QueryBuilder::select($this->table_name) .
            QueryBuilder::where($where_field, $where_value) .
            QueryBuilder::like($like_field, $like_value, $sql_start_with_where) .
            QueryBuilder::order_by($this->table_name, $order_by_field, $order_by_sorting_method) .
            QueryBuilder::limit($start, $range);
        return $this->my_query($sql);
    }
    public function products_count(
        $where_field,
        $where_value,
        $like_field,
        $like_value)
    {
        $sql_start_with_where = true;
        if (!empty($where_value)) {
            $sql_start_with_where = false;
        }
        $select = 'COUNT(*)';
        $sql = QueryBuilder::select($this->table_name, $select) .
            QueryBuilder::where($where_field, $where_value) .
            QueryBuilder::like($like_field, $like_value, $sql_start_with_where);
        return $this->my_query_col($sql);
    }
}