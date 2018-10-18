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
        $sql = QueryBuilder::select($this->table_name, ['users_products_reviews.text_review', 'users_products_reviews.created_at', 'users.email']) .
            QueryBuilder::inner_join('users') .
            QueryBuilder::on('users.id', 'users_products_reviews.user_id') .
            QueryBuilder::where('users_products_reviews.product_id', $id) .
            QueryBuilder::order_by($this->table_name, 'created_at', 'DESC');
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