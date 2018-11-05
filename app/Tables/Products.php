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
    public $price;
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
        $sql = 'UPDATE ' . $this->table_name . " SET quantity_sold = quantity_sold + 1 WHERE id = '" . $product_id . "'";
        $this->my_query($sql);
    }
    public function add_product($data)
    {
        $this->category = $data['category'];
        $this->title = $data['title'];
        $this->picture = $data['picture'];
        $this->price = $data['price'];
        $this->quantity_in_stock = $data['quantity_in_stock'];
        $this->style = $data['style'];
        $this->features = $data['features'];
        $this->fabric_material = $data['fabric_material'];
        $this->length = $data['length'];
        $this->color = $data['color'];
        $this->manufacturer_country = $data['manufacturer_country'];
        $this->description = $data['description'];
        $this->quantity_sold = 0;
        $this->add_record();
    }
    public function products(
        $where_field,
        $where_value,
        $like_field,
        $like_value,
        $order_by_field,
        $order_by_sorting_method,
        $start,
        $range,
        $filter_flag,
        $where_length_field = null,
        $where_length_value = null,
        $where_fabric_material_field = null,
        $where_fabric_material_value = null,
        $where_color_field = null,
        $where_color_value = null,
        $where_price_from_field = null,
        $where_price_from_value = null,
        $where_price_to_field = null,
        $where_price_to_value = null
    )
    {
        $obj = new QueryBuilder();
        if ($filter_flag == false) {
            $sql_like_start_with_where = true;
            if ($where_value) {
                $sql_like_start_with_where = false;
            }
            $obj->select($this->table_name)
                ->where($where_field, $where_value)
                ->like($like_field, $like_value, $sql_like_start_with_where)
                ->order_by($this->table_name, $order_by_field, $order_by_sorting_method)
                ->limit($start, $range);
        } else {
            $sql_start_with_where_length = true;
            $sql_start_with_where_material = true;
            $sql_start_with_where_color = true;
            $sql_start_with_where_price_from = true;
            $sql_start_with_where_price_to = true;
            if ($where_value) {
                $sql_start_with_where_length = false;
                $sql_start_with_where_material = false;
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_length_value) {
                $sql_start_with_where_material = false;
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_fabric_material_value) {
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_color_value) {
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_price_from_value) {
                $sql_start_with_where_price_to = false;
            }
            $obj->select($this->table_name)
                ->where($where_field, $where_value)
                ->where($where_length_field, $where_length_value, $sql_start_with_where_length, $sql_logical_operator = 'OR')
                ->like($where_fabric_material_field, $where_fabric_material_value, $sql_start_with_where_material, $sql_logical_operator = 'OR')
                ->like($where_color_field, $where_color_value, $sql_start_with_where_color, $sql_logical_operator = 'OR')
                ->where($where_price_from_field, $where_price_from_value, $sql_start_with_where_price_from, $sql_logical_operator = 'AND', $sql_operand = '>=')
                ->where($where_price_to_field, $where_price_to_value, $sql_start_with_where_price_to, $sql_logical_operator = 'AND', $sql_operand = '<=')
                ->like($like_field, $like_value, $sql_start_with_where = false)
                ->order_by($this->table_name, $order_by_field, $order_by_sorting_method)
                ->limit($start, $range);
        }
        $sql = $obj->sql;
        return $this->my_query($sql);
    }
    public function products_count(
        $where_field,
        $where_value,
        $like_field,
        $like_value,
        $filter_flag,
        $where_length_field = null,
        $where_length_value = null,
        $where_fabric_material_field = null,
        $where_fabric_material_value = null,
        $where_color_field = null,
        $where_color_value = null,
        $where_price_from_field = null,
        $where_price_from_value = null,
        $where_price_to_field = null,
        $where_price_to_value = null
    )
    {
        $obj = new QueryBuilder();
        $select = 'COUNT(*)';
        if ($filter_flag == false) {
            $sql_like_start_with_where = true;
            if ($where_value) {
                $sql_like_start_with_where = false;
            }
            $obj->select($this->table_name, $select)
                ->where($where_field, $where_value)
                ->like($like_field, $like_value, $sql_like_start_with_where);
        } else {
            $sql_start_with_where_length = true;
            $sql_start_with_where_material = true;
            $sql_start_with_where_color = true;
            $sql_start_with_where_price_from = true;
            $sql_start_with_where_price_to = true;
            if ($where_value) {
                $sql_start_with_where_length = false;
                $sql_start_with_where_material = false;
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_length_value) {
                $sql_start_with_where_material = false;
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_fabric_material_value) {
                $sql_start_with_where_color = false;
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_color_value) {
                $sql_start_with_where_price_from = false;
                $sql_start_with_where_price_to = false;
            } if ($where_price_from_value) {
                $sql_start_with_where_price_to = false;
            }
            $obj->select($this->table_name, $select)
                ->where($where_field, $where_value)
                ->where($where_length_field, $where_length_value, $sql_start_with_where_length, $sql_logical_operator = 'OR')
                ->like($where_fabric_material_field, $where_fabric_material_value, $sql_start_with_where_material, $sql_logical_operator = 'OR')
                ->like($where_color_field, $where_color_value, $sql_start_with_where_color, $sql_logical_operator = 'OR')
                ->where($where_price_from_field, $where_price_from_value, $sql_start_with_where_price_from, $sql_logical_operator = 'AND', $sql_operand = '>=')
                ->where($where_price_to_field, $where_price_to_value, $sql_start_with_where_price_to, $sql_logical_operator = 'AND', $sql_operand = '<=')
                ->like($like_field, $like_value, $sql_start_with_where = false);
        }
        $sql = $obj->sql;
        return $this->my_query_col($sql);
    }

//    public function search_products($search_query)
//    {
//        $sql = 'SELECT * FROM '. $this->table_name .
//            " WHERE MATCH (category, title, style, features, fabric_material, length, color, description) AGAINST ('". $search_query ."')";
//        $sql = 'SELECT * FROM '. $this->table_name .
//            " WHERE MATCH (title) AGAINST ('". $search_query ."')";
//        return $this->my_query($sql);
//    }
}