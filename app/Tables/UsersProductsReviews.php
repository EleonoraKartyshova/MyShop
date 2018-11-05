<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 25.07.18
 * Time: 15:35
 */
namespace MyShop\Tables;

use Shop\ActiveRecord;
use Shop\QueryBuilder;

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
        $obj = new QueryBuilder();
        $obj->select($this->table_name, ['users_products_reviews.text_review', 'users_products_reviews.created_at', 'users.email'])
            ->inner_join('users')
            ->on('users.id', 'users_products_reviews.user_id')
            ->where('users_products_reviews.product_id', $id)
            ->order_by($this->table_name, 'created_at', 'DESC');
        $sql = $obj->sql;
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