<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:48
 */
namespace MyShop\Models;

use Shop\Core\Model;
use MyShop\Tables\Products;

class ProductsModel extends Model
{
    public function products($category, $page, $products_count_per_page, $sort, $search_query, $filter)
    {
        if ($products_count_per_page <> '6' && $products_count_per_page <> '9' && $products_count_per_page <> '12' && $products_count_per_page <> '18' && $products_count_per_page <> '24') {
            $products_count_per_page = '6';
        }
        $category_field = 'category';
        $search_field = 'title';
        $obj = new Products();
        if (($category == 'all') || ($category <> 'wedding' && $category <> 'cocktail' && $category <> 'evening')) {
            $category = null;
            $categ = 'all';
        } else {
            $categ = $category;
        }
        $where_length_field = null;
        $where_length_value = null;
        $where_fabric_material_field = null;
        $where_fabric_material_value = null;
        $where_color_field = null;
        $where_color_value = null;
        $where_price_from_field = null;
        $where_price_from_value = null;
        $where_price_to_field = null;
        $where_price_to_value = null;
        if (!empty($filter)) {
            if (isset($filter['length'])) {
                $where_length_field = [];
                $where_length_value = [];
                foreach ($filter['length'] as $value) {
                    $where_length_field[] = 'length';
                    $where_length_value[] = $value;
                }
            } else {
                $where_length_field = null;
                $where_length_value = null;
            }
            if (isset($filter['fabric_material'])) {
                $where_fabric_material_field = "";
                $where_fabric_material_value = [];
                foreach ($filter['fabric_material'] as $value) {
                    $where_fabric_material_field = 'fabric_material';
                    $where_fabric_material_value[] = $value;
                }
            } else {
                $where_fabric_material_field = null;
                $where_fabric_material_value = null;
            }
            if (isset($filter['color'])) {
                $where_color_field = "";
                $where_color_value = [];
                foreach ($filter['color'] as $value) {
                    $where_color_field = 'color';
                    $where_color_value[] = $value;
                }
            } else {
                $where_color_field = null;
                $where_color_value = null;
            }
            if (!empty($filter['price_from'])) {
                $where_price_from_field = 'price';
                $where_price_from_value = $filter['price_from'];
            } else {
                $where_price_from_field = null;
                $where_price_from_value = null;
            }
            if (!empty($filter['price_to'])) {
                $where_price_to_field = 'price';
                $where_price_to_value = $filter['price_to'];
            } else {
                $where_price_to_field = null;
                $where_price_to_value = null;
            }
            $filter_flag = true;
        } else {
            $filter_flag = false;
        }

        switch ($sort) {
            case 'new':
                $sort_by_field = 'created_at';
                $sorting_method = ' DESC ';
                break;
            case 'top':
                $sort_by_field ='quantity_sold';
                $sorting_method = ' DESC ';
                break;
            case 'low-price':
                $sort_by_field = 'price';
                $sorting_method = ' ASC ';
                break;
            case 'high-price':
                $sort_by_field = 'price';
                $sorting_method = ' DESC ';
                break;
            default:
                $sort_by_field = null;
                $sorting_method = null;
                $sort = 'recommend';
        }
        if ($search_query) {
            $search_query = trim($search_query, ' ');
            $search_query = explode(' ', $search_query);
        }
        $products_count = $obj->products_count(
            $category_field,
            $category,
            $search_field,
            $search_query,
            $filter_flag,
            $where_length_field,
            $where_length_value,
            $where_fabric_material_field,
            $where_fabric_material_value,
            $where_color_field,
            $where_color_value,
            $where_price_from_field,
            $where_price_from_value,
            $where_price_to_field,
            $where_price_to_value);
        $last_page = ceil($products_count/$products_count_per_page);
        if ($page < 1 || $page > $last_page) {
            $page = 1;
        }
        $start = ($page - 1) * $products_count_per_page;
        $data['products'] = $obj->products(
            $category_field,
            $category,
            $search_field,
            $search_query,
            $sort_by_field,
            $sorting_method,
            $start,
            $products_count_per_page,
            $filter_flag,
            $where_length_field,
            $where_length_value,
            $where_fabric_material_field,
            $where_fabric_material_value,
            $where_color_field,
            $where_color_value,
            $where_price_from_field,
            $where_price_from_value,
            $where_price_to_field,
            $where_price_to_value);
        $current_page = $page;
        if ($current_page > 1) {
            $previous_page = $current_page - 1;
        } else {
            $previous_page = null;
        }
        if ($current_page < $last_page) {
            $next_page = $current_page + 1;
        } else {
            $next_page = null;
        }
        if ($next_page <> null && $next_page < $last_page) {
            $after_next_page = $next_page + 1;
        } else {
            $after_next_page = null;
        }
        $data['category'] = $categ;
        $data['previous_page'] = $previous_page;
        $data['current_page'] = $current_page;
        $data['next_page'] = $next_page;
        $data['after_next_page'] = $after_next_page;
        $data['last_page'] = $last_page;
        $data['num'] = $products_count_per_page;
        $data['sort'] = $sort;
        return $data;
    }
}