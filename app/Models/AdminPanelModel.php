<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 26.10.18
 * Time: 16:23
 */

namespace MyShop\Models;

use Shop\Core\Model;
use MyShop\Tables\Products;

class AdminPanelModel extends Model
{
    public function get_products()
    {
        $obj = new Products();
        $products = $obj->get_all_records();
        return $products;
    }
    public function get_products_count()
    {
        $obj = new Products();
        $count = $obj->products_count($where_field = null, $where_value = null, $like_field = null, $like_value = null, $filter_flag = false);
        return $count;
    }
    public function get_product($id)
    {
        $obj = new Products();
        $product = $obj->get_record_by_id($id);
        return $product;
    }
    public function remove_product($id)
    {
        $obj = new Products();
        $obj->delete_record_by_id($id);
    }
    public function edit_product($id, $changes)
    {
        $obj = new Products();
        $obj->update_record_by_id($id, $changes);
    }
    public function add_product($product_data, $post_code, $session_code)
    {
        $obj = new Products();
        if ($post_code == $session_code) {
            $obj->add_product($product_data);
        }
    }
}