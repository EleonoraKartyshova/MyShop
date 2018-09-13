<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 12.07.18
 * Time: 11:46
 */
namespace MyShop\Models;

use MyShop\Tables\Products;
use MyShop\Tables\UsersProductsReviews;
use Shop\Core\Model;

class ProductModel extends Model
{
    public function get_product($id)
    {
        $product = new Products();
        $data['product'] = $product->get_record_by_id($id);
        $us_prod_rev = new UsersProductsReviews();
        $data['reviews'] = $us_prod_rev->get_reviews($id);
        return $data;
    }
    public function add_review($id, $user_id, $text_review, $post_review_code, $session_review_code)
    {
        $obj = new UsersProductsReviews();
        if (isset($text_review) && $post_review_code == $session_review_code) {
            $obj->add_review($id, $user_id, $text_review);
        }
    }
}