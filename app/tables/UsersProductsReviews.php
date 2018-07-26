<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:35
 */
namespace MyShop\tables;

use Shop\ActiveRecord;

class UsersProductsReviews extends ActiveRecord
{
    protected $dbc;
    protected $table_name = 'users_products_reviews';
    public $id;
    public $product_id;
    public $user_id;
    public $text_review;
    public $created_at;
    public $updated_at;

    public function get_reviews($id)
    {
        $sql = 'SELECT users_products_reviews.text_review, users_products_reviews.created_at, users.email 
                FROM users_products_reviews 
                INNER JOIN users 
                ON users.id = users_products_reviews.user_id 
                WHERE users_products_reviews.product_id = '. $id . ' ORDER BY users_products_reviews.created_at DESC';
        return $this->my_query($sql);
    }
    public function add_review($pr_id, $us_id, $text)
    {
        $this->product_id = $pr_id;
        $this->user_id = $us_id;
        $this->text_review = $text;
        $this->add_record();
    }
}