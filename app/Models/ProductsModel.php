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
    public function products($category, $page, $products_count_per_page, $sort, $search_query)
    {
        $start = ($page - 1) * $products_count_per_page;
        $category_field = 'category';
        $search_field = 'title';
        $obj = new Products();
        if ($category == 'all') {
            $category = null;
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
        }
        if ($search_query) {
            $search_query = trim($search_query, ' ');
            $search_query = explode(' ', $search_query);
        }
        $data['products'] = $obj->products($category_field, $category, $search_field, $search_query, $sort_by_field, $sorting_method, $start, $products_count_per_page);
        $products_count = $obj->products_count($category_field, $category, $search_field, $search_query);
        $last_page = ceil($products_count/$products_count_per_page);
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